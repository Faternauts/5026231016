<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogActivityController extends Controller
{
    public function index()
    {
        $logs = DB::table('logactivity')->orderBy('id', 'desc')->get();
        return view('logactivity', ['logs' => $logs]);
    }
}
