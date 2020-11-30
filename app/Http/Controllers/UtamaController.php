<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\tbl_pengunjung;
use App\Models\tbl_setting;
 
class UtamaController extends Controller
{
    public function index_view()
    {
        $datapengunjunglantai1 = tbl_pengunjung::where('lantai', 1)->get();
        $datapengunjunglantai2 = tbl_pengunjung::where('lantai', 2)->get();
 
        $datasetting = tbl_setting::all();

        $totallantai1 = 0;
        $totallantai2 = 0;

        foreach ($datapengunjunglantai1 as $dataplantai1) {
            $totallantai1 = $dataplantai1->jumlah;
        }

        foreach ($datapengunjunglantai2 as $dataplantai2) {
            $totallantai2 = $dataplantai2->jumlah;
        }
 
        $jumlahmakslantai1 = ''; 
        $jumlahmakslantai2 = '';
 
        foreach ($datasetting as $setting) {
            $jumlahmakslantai1 = $setting->max_lantai1; 
            $jumlahmakslantai2 = $setting->max_lantai2;
        }

        if($totallantai1 < 0){
            $totallantai1 = 0;
        }

        if($totallantai2 < 0){
            $totallantai2 = 0;
        }
 
        return view('halamanutama', [
            "jumlahpengunjunglantai1" => $totallantai1,
            "jumlahmakslantai1" => $jumlahmakslantai1,
            "jumlahpengunjunglantai2" => $totallantai2,
            "jumlahmakslantai2" => $jumlahmakslantai2
        ]);
    }
}