<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('pegawai')->paginate(10);
        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('pegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/pegawai');
    }

    public function edit($kodepegawai)
    {
        $pegawai = DB::table('pegawai')
            ->where('kodepegawai', $kodepegawai)
            ->first(); // pakai first() karena hanya satu data yang dimunculkan

        return view('edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
        DB::table('pegawai')
            ->where('kodepegawai', $request->kodepegawai)
            ->update([
                'namalengkap' => $request->namalengkap,
                'divisi' => $request->divisi,
                'departemen' => $request->departemen
            ]);

        return redirect('/pegawai');
    }

    public function hapus($kodepegawai)
    {
        DB::table('pegawai')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/pegawai');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $pegawai = DB::table('pegawai')
            ->where('namalengkap', 'like', "%" . $cari . "%")
            ->paginate(10);

        return view('index', ['pegawai' => $pegawai]);
    }
}
