<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel pensil
        $pensil = DB::table('pensil')->paginate(10);

        // Mengarah ke view home_pensil.blade.php
        return view('home_pensil', ['pensil' => $pensil]);
    }

    public function tambah()
    {
        return view('pensil.tambah'); // Tetap gunakan folder pensil
    }

    public function store(Request $request)
    {
        DB::table('pensil')->insert([
            'pensil_id' => $request->pensil_id,
            'merk' => $request->merk,
            'price' => $request->price,
            'availability' => $request->availability,
            'weight' => $request->weight
        ]);

        return redirect('/tugasCRUD')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $pensil = DB::table('pensil')->where('pensil_id', $id)->first();

        if (!$pensil) {
            abort(404);
        }

        return view('pensil.edit', ['pensil' => $pensil]);
    }

    public function update(Request $request)
    {
        DB::table('pensil')->where('pensil_id', $request->pensil_id)->update([
            'merk' => $request->merk,
            'price' => $request->price,
            'availability' => $request->availability,
            'weight' => $request->weight
        ]);

        return redirect('/tugasCRUD')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapus($id)
    {
        DB::table('pensil')->where('pensil_id', $id)->delete();

        return redirect('/tugasCRUD')->with('success', 'Data berhasil dihapus!');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $pensil = DB::table('pensil')
            ->where('merk', 'like', "%" . $cari . "%")
            ->paginate(10)
            ->appends($request->all());

        // Tetap arahkan ke view home_pensil
        return view('home_pensil', ['pensil' => $pensil]);
    }
}
