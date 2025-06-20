<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilController extends Controller
{
    // Fungsi untuk log aktivitas route
    private function logActivity($request)
    {
        DB::table('logactivity')->insert([
            'namaroute' => $request->path()
        ]);
    }

    public function pensil(Request $request)
    {
        $this->logActivity($request);
        $data = DB::table('pensil')->paginate(10);
        return view('pensil', ['pensil' => $data]);
    }

    public function tambah(Request $request)
    {
        $this->logActivity($request);
        return view('tambahpensil');
    }

    public function store(Request $request)
    {
        $this->logActivity($request);

        DB::table('pensil')->insert([
            'merkpensil'  => $request->merkpensil,
            'hargapensil' => $request->hargapensil,
            'tersedia'    => $request->tersedia,
            'berat'       => $request->berat
        ]);

        return redirect('/pensil')->with('success', 'Data pensil berhasil ditambahkan!');
    }

    public function edit(Request $request, $id)
    {
        $this->logActivity($request);

        $pensil = DB::table('pensil')->where('id_pensil', $id)->first();
        return view('editpensil', ['pensil' => $pensil]);
    }

    public function update(Request $request)
    {
        $this->logActivity($request);

        DB::table('pensil')->where('id_pensil', $request->id)->update([
            'merkpensil'  => $request->merkpensil,
            'hargapensil' => $request->hargapensil,
            'tersedia'    => $request->tersedia,
            'berat'       => $request->berat
        ]);

        return redirect('/pensil')->with('success', 'Data pensil berhasil diperbarui!');
    }

    public function hapus(Request $request, $id)
    {
        $this->logActivity($request);

        DB::table('pensil')->where('id_pensil', $id)->delete();
        return redirect('/pensil')->with('success', 'Data pensil berhasil dihapus!');
    }

    public function cari(Request $request)
    {
        $this->logActivity($request);

        $cari = $request->cari;
        $pensil = DB::table('pensil')
            ->where('merkpensil', 'like', "%" . $cari . "%")
            ->paginate();

        return view('pensil', ['pensil' => $pensil]);
    }
}
