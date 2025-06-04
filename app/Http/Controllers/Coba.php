<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coba extends Controller
{
    //
    public function helloWorld(){
        return view('blog');
    }
    // relate to biodata.blade.php
    public function index(){
    	$nama = "Hizkia Crisantino";
        $umur = 18;
        $alamat = "Surabaya";
        $pelajaran = ["Algoritma & Pemrograman", "Kalklus", "Pemrograman Web"];
        return view('biodata', ['nama' => $nama, 'usia' => $umur, 'alamat' =>$alamat, 'matkul'=> $pelajaran]);
    }
}
