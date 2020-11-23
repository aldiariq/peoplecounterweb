<?php

namespace App\Http\Controllers;

use App\Models\tbl_pengunjung;

class PengunjungController extends Controller
{
    public function index_view ()
    {
        return view('pages.pengunjung.pengunjung-data', [
            'pengunjung' => tbl_pengunjung::class
        ]);
    }

    public function reset_pengguna()
    {
        tbl_pengunjung::truncate();
        
        return redirect('pengunjung');
        
    }
}
