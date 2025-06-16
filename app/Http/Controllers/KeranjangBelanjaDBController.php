<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaDBController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);

    	// mengirim data keranjangbelanja ke view index
    	return view('indexkeranjang',['keranjangbelanja' => $keranjangbelanja]);
    }



    // method untuk menampilkan view form tambah keranjangbelanja
    public function beli()
    {

        // memanggil view beli
        return view('beli');

    }

    // method untuk insert data ke table keranjangbelanja
    public function store(Request $request)
    {
        // insert data ke table keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);
        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');

    }

    // method untuk hapus data keranjangbelanja
    public function batal($ID)
    {
        // menghapus data keranjangbelanja berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');

    }

}