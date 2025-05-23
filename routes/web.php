<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
