<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaDBController extends Controller
{
    public function index()
    {
        // Ambil semua data keranjang belanja
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

        // Tampilkan ke view
        return view('indexkeranjang', ['keranjangbelanja' => $keranjangbelanja]);
    }

    // Menampilkan form pembelian
    public function beli()
    {
        return view('beli');
    }

    // Menyimpan data pembelian menggunakan GET
    public function store(Request $request)
    {
        if ($request->method() !== 'GET') {
            abort(405, 'Method Not Allowed');
        }

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        return redirect('/keranjangbelanja')->with('success', 'Barang berhasil ditambahkan ke keranjang!');
    }

    // Menghapus data berdasarkan ID via GET
    public function batal($ID)
    {
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();
        return redirect('/keranjangbelanja')->with('success', 'Barang berhasil dibatalkan dari keranjang!');
    }
}
