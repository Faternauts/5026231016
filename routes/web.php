<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Menampilkan view langsung dari routes (bukan best practice)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('/blog', function () {
    return view('blog');
});

//Route dari controller --> Route::nama method('nama routes', [nama controller::class, 'nama function']);
Route::get('hello', [Coba::class, 'helloWorld']);

//Tugas Frontend
Route::get('/firstMeet', function () {
    return view('firstMeet');
});

Route::get('/page-2', function () {
    return view('page-2');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/javascript-1', function () {
    return view('js1');
});

Route::get('/frontend', function () {
    return view('summary-of-my-learning');
});

// Pertemuan 12
//Memanggil controller Coba.php dan function index()
Route::get('dosen', [Coba::class, 'index']);

//Route::get('/pegawai/{nama}', 'PegawaiController@index');
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('formulir', [PegawaiController::class, 'formulir']);
Route::post('formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
