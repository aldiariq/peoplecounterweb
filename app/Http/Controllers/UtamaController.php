<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_pengunjung;
use App\Models\tbl_setting;

class UtamaController extends Controller
{
    public function index_view()
    {
        $datapengunjungmasuklantai1 = tbl_pengunjung::where('status', 1)->where('lantai', 1)->get();
        $jumlahpengunjungmasuklantai1 = $datapengunjungmasuklantai1->count();

        $datapengunjungmasuklantai2 = tbl_pengunjung::where('status', 1)->where('lantai', 2)->get();
        $jumlahpengunjungmasuklantai2 = $datapengunjungmasuklantai2->count();

        $datapengunjungkeluarlantai1 = tbl_pengunjung::where('status', 0)->where('lantai', 1)->get();
        $jumlahpengunjungkeluarlantai1 = $datapengunjungkeluarlantai1->count();

        $datapengunjungkeluarlantai2 = tbl_pengunjung::where('status', 0)->where('lantai', 2)->get();
        $jumlahpengunjungkeluarlantai2 = $datapengunjungkeluarlantai2->count();

        $datasetting = tbl_setting::all();

        foreach ($datasetting as $setting) {
           $jumlahmakslantai1 = $setting->max_lantai1; 
           $jumlahmakslantai2 = $setting->max_lantai2;
        }

        $totallantai1 = $jumlahpengunjungmasuklantai1 - $jumlahpengunjungkeluarlantai1;
        $totallantai2 = $jumlahpengunjungmasuklantai2 - $jumlahpengunjungkeluarlantai2;



        return view('halamanutama', [
            "jumlahpengunjunglantai1" => $totallantai1,
            "jumlahmakslantai1" => $jumlahmakslantai1,
            "jumlahpengunjunglantai2" => $totallantai2,
            "jumlahmakslantai2" => $jumlahmakslantai2
        ]);
    }
}
