<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\VGADBController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\PageCounterDBController;
use App\Http\Controllers\NilaiDBController;

// import java.io;

// Syste.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('pertemuan1', function () {
	return view('pertama');
});

Route::get('pertemuan3/Forms', function () {
	return view('Forms');
});

Route::get('pertemuan3/Transition', function () {
	return view('Transition');
});

Route::get('pertemuan3/bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('pertemuan3/template1', function () {
	return view('template1');
});

Route::get('pertemuan4', function () {
	return view('latsol');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('pertemuan7/validasi', function () {
	return view('validasi1');
});

Route::get('pertemuan7/js', function () {
	return view('js1');
});

Route::get('ets', function () {
	return view('index');
});

Route::get('template', function () {
	return view('template');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//route blog
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
//tambahan baru
//Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);


//route VGADB
Route::get('/vga', [VGADBController::class, 'index']);
Route::get('/vga/tambah', [VGADBController::class, 'tambah']);
Route::post('/vga/store', [VGADBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/vga/edit/{id}',[VGADBController::class, 'edit']);
Route::post('/vga/update',[VGADBController::class, 'update']);
Route::get('/vga/hapus/{id}', [VGADBController::class, 'hapus']);
//tambahan cari
Route::get('/vga/cari', [VGADBController::class, 'cari']);

//route Karyawan
Route::get('/karyawan', [KaryawanDBController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanDBController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/karyawan/edit/{id}',[KaryawanDBController::class, 'edit']);
Route::post('/karyawan/update',[KaryawanDBController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanDBController::class, 'hapus']);

//
Route::get('/pagecounter', [PageCounterDBController::class,'indexpage']);

//route Nilai
Route::get('/eas', [NilaiDBController::class,'index']);
Route::get('/eas/tambah', [NilaiDBController::class, 'tambah']);
