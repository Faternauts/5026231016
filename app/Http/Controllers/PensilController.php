<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilController extends Controller
{
    public function pensil()
    {
        $data = DB::table('pensil')->paginate(10);
        return view('pensil', ['pensil' => $data]);
    }

    public function tambah()
    {
        return view('tambahpensil');
    }

    public function store(Request $request)
    {
        DB::table('pensil')->insert([
            'merkpensil'  => $request->merkpensil,
            'hargapensil' => $request->hargapensil,
            'tersedia'    => $request->tersedia,
            'berat'       => $request->berat
        ]);

        return redirect('/pensil')->with('success', 'Data pensil berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $pensil = DB::table('pensil')
            ->where('id_pensil', $id)
            ->first();

        return view('editpensil', ['pensil' => $pensil]);
    }

    public function update(Request $request)
    {
        DB::table('pensil')->where('id_pensil', $request->id)->update([
            'merkpensil'  => $request->merkpensil,
            'hargapensil' => $request->hargapensil,
            'tersedia'    => $request->tersedia,
            'berat'       => $request->berat
        ]);

        return redirect('/pensil')->with('success', 'Data pensil berhasil diperbarui!');
    }

    public function hapus($id)
    {
        DB::table('pensil')->where('id_pensil', $id)->delete();
        return redirect('/pensil')->with('success', 'Data pensil berhasil dihapus!');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $pensil = DB::table('pensil')
            ->where('merkpensil', 'like', "%" . $cari . "%")
            ->paginate();

        return view('pensil', ['pensil' => $pensil]);
    }
}
