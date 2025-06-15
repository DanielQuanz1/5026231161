<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageCounterDBController extends Controller
{
    public function indexpage()
    {
        // Tambah jumlah pengunjung
        DB::table('pagecounter')->where('ID', 1)->increment('Jumlah', 1);

        // Ambil jumlah terbaru
        $jumlah = DB::table('pagecounter')->where('ID', 1)->value('Jumlah');

        return view('indexpage', ['jumlah' => $jumlah]);
    }
}
