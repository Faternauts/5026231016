<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TrafficController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel pagecounter ID = 1
        $counter = DB::table('pagecounter')->where('ID', 1)->first();

        if ($counter) {
            $jumlahBaru = $counter->Jumlah + 1;
            DB::table('pagecounter')->where('ID', 1)->update(['Jumlah' => $jumlahBaru]);
        } else {
            $jumlahBaru = 1;
            DB::table('pagecounter')->insert([
                'ID' => 1,
                'Jumlah' => $jumlahBaru
            ]);
        }

        return view('pagecounter', ['jumlah' => $jumlahBaru]);
    }
}
