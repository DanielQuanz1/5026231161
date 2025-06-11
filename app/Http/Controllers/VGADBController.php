<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VGADBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$vga = DB::table('vga')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexvga',['vga' => $vga]);
    }

// method untuk menampilkan view form tambah pegawai
    public function tambah(){
        // memanggil view tambah
        return view('tambahvga');
    }

    // method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('vga')->insert([
		'merkVGA' => $request->merkVGA,
		'hargaVGA' => $request->hargaVGA,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/vga');

}

// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$vga = DB::table('vga')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editvga',['vga' => $vga]);

}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('vga')->where('id',$request->id)->update([
		'merkVGA' => $request->merkVGA,
		'hargaVGA' => $request->hargaVGA,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/vga');
}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('vga')->where('id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/vga');
}


public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table vga sesuai pencarian data
		$vga = DB::table('vga')
		->where('merkVGA','like',"%".$cari."%")
		->paginate();

    		// mengirim data vga ke view index
		return view('indexvga',['vga' => $vga]);

	}
}
