<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_pengunjung;

class UtamaController extends Controller
{
    public function index_view()
    {
        $datapengunjung = tbl_pengunjung::all();
        $jumlahpengunjung = $datapengunjung->count();
        return view('halamanutama', ["jumlahpengunjung" => $jumlahpengunjung]);
    }
}
