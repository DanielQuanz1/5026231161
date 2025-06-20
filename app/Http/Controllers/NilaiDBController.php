<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiDBController extends Controller
{
    public function index()
    {

    	// mengambil data dari table pegawai
    	$nilai = DB::table('nilai')->get()->map(function ($item) {
            // Konversi Nilai Huruf
            if ($item->nilaiangka <= 40) {
                $item->nilaihuruf = 'D';
            } elseif ($item->nilaiangka <= 60) {
                $item->nilaihuruf = 'C';
            } elseif ($item->nilaiangka <= 80) {
                $item->nilaihuruf = 'B';
            } else {
                $item->nilaihuruf = 'A';
            }

            // Bobot = nilai x sks
            $item->bobot = $item->nilaiangka * $item->sks;

            return $item;
        });

    	// mengirim data pegawai ke view index
    	return view('indexnilai',['nilai' => $nilai]);
    }

// method untuk menampilkan view form tambah pegawai
    public function tambah(){
        // memanggil view tambah
        return view('tambahnilai');
    }

    // method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('nilai')->insert([
		'id' => $request->id,
		'nomorinduksiswa' => $request->nomorinduksiswa,
		'nilaiangka' => $request->nilaiangka,
		'sks' => $request->sks
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/eas');

}


}
