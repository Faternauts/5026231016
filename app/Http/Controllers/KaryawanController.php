<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KaryawanController extends Controller
{
    public function index()
    {
        // Mengambil semua data karyawan (tanpa paginate)
        $karyawan = DB::table('karyawan')->get();

        // Mengirim data ke view index_karyawan
        return view('index_karyawan', ['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        // Menampilkan halaman tambah karyawan
        return view('tambahKaryawan');
    }

    // Method untuk menyimpan data karyawan via GET
    public function store(Request $request)
    {
        // Pastikan metode GET yang digunakan
        if ($request->method() !== 'GET') {
            abort(405, 'Method Not Allowed');
        }

        // Validasi input
        $validator = Validator::make($request->all(), [
            'kode' => 'required|max:5|unique:karyawan,kodepegawai',
            'nama' => 'required|max:50',
            'divisi' => 'required|max:5',
            'departemen' => 'required|max:10',
        ]);

        if ($validator->fails()) {
            return redirect()->route('karyawan.tambah')
                ->withErrors($validator)
                ->withInput();
        }

        // Insert data ke database
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => strtoupper($request->nama),
            'divisi' => $request->divisi,
            'departemen' => strtolower($request->departemen)
        ]);

        return redirect('/kodeX2')->with('success', 'Data karyawan berhasil ditambahkan!');
    }

    // Method untuk menghapus data
    public function hapus($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/kodeX2')->with('success', 'Data karyawan berhasil dihapus!');
    }
}
