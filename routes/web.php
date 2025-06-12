<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\pensilController;
use App\Http\Controllers\KaryawanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('template');
});


Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Coba::class, 'helloworld']);

//Route untuk TUGAS 1 - ETS
Route::get('pertama', function () {
	return view('pertama');
});

Route::get('kedua', function () {
	return view('tugasdesignlinktree');
});

Route::get('ketiga', function () {
	return view('latihankode1');
});

Route::get('keempat', function () {
	return view('js2');
});

Route::get('kelima', function () {
	return view('js1');
});

Route::get('keenam', function () {
	return view('bootstrap2');
});

Route::get('ketujuh', function () {
	return view('bootstrap1');
});

Route::get('kedelapan', function () {
	return view('latihangrid');
});




Route::get('frontend', function () {
	return view('kumpulanlink');
});

Route::get('dosen', [Coba::class, 'index']);

//Route::get('pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']); //Halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //Action form

//Route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);


//Route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//CRUD (Tambah)
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);

//CRUD (Edit)
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);

//CRUD (Hapus)
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);


//TUGAS CRUD (pensil)
//ROUTE TUGAS CRUD

Route::get('/pensil',[PensilController::class,'pensil']);
Route::get('/pensil/tambah',[PensilController::class,'tambah']);
Route::post('/pensil/store',[PensilController::class,'store']);
Route::get('/pensil/edit/{id}',[PensilController::class,'edit']);
Route::post('/pensil/update',[PensilController::class,'update']);
Route::get('/pensil/hapus/{id}',[PensilController::class,'hapus']);
Route::get('/pensil/cari',[PensilController::class,'cari']);



//TUGAS LATIHAN PRIA GENAP
//Route index_karyawan
Route::get('/kodeX2', [KaryawanController::class, 'index'])->name('karyawan.index');

// Route untuk menampilkan form tambah
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah'])->name('karyawan.tambah');

// Route untuk memproses data dari form tambah
Route::post('/karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');

//Route untuk hapus data
Route::get('/karyawan/hapus/{kodepegawai}', [KaryawanController::class, 'hapus'])->name('karyawan.hapus');
