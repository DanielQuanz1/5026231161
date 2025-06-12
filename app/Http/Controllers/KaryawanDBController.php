<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexkaryawan',['karyawan' => $karyawan]);
    }

// method untuk menampilkan view form tambah pegawai
    public function tambah(){
        // memanggil view tambah
        return view('tambahkaryawan');
    }

    // method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('karyawan')->insert([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');

}

// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$karyawan = DB::table('karyawan')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editkaryawan',['karyawan' => $karyawan]);

}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('karyawan')->where('kodepegawai',$request->kodepegawai)->update([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
}

// method untuk hapus data pegawai
public function hapus($kodepegawai)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
}

}
