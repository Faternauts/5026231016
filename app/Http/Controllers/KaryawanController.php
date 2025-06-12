<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KaryawanController extends Controller
{
    public function index()
    {

        $karyawan= DB::table('karyawan')->paginate(10);//get dan paginate tidak bisa dilakukan berbarengan

        // mengirim data karyawan ke view index
        return view('index_karyawan',['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('tambahKaryawan');

    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // Cek ke tabel 'karyawan' di kolom 'kodepegawai'
            'kode' => 'required|max:5|unique:karyawan,kodepegawai',
            'nama' => 'required|max:50',
            'divisi' => 'required|max:5',
            'departemen' => 'required|max:10',
        ]);

        if ($validator->fails()) {
            // Jika validasi gagal, kembali ke halaman form dengan pesan error
            return redirect()->route('karyawan.tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Jika validasi berhasil, baru simpan data
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => strtoupper($request->nama),
            'divisi' => $request->divisi,
            'departemen' => strtolower($request->departemen)
        ]);

        return redirect('/kodeX2')->with('success', 'Data karyawan berhasil ditambahkan!');
    }

    // method untuk hapus data karyawan
    public function hapus($kodepegawai)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/kodeX2')->with('success', 'Data karyawan berhasil dihapus!');
    }
}
