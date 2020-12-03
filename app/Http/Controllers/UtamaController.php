<?php
 
namespace App\Http\Controllers;
 
use App\Models\tbl_pengunjung;
use App\Models\tbl_setting;
use App\Models\tbl_settingpengunjung;
 
class UtamaController extends Controller
{
    public function index_view()
    {
        return view('halamanutama');
    }

    public function getdataPengunjung(){
        $datapengunjunglantai1 = tbl_pengunjung::where('lantai', 1)->sum('jumlah');
        $datapengunjunglantai2 = tbl_pengunjung::where('lantai', 2)->sum('jumlah');

        $datatambahanpengunjung = tbl_settingpengunjung::get();

        $totallantai1 = 0;
        $totallantai2 = 0;

        foreach ($datatambahanpengunjung as $datatambahan) {
            $totallantai1 = $datapengunjunglantai1 + $datatambahan->jumlahlantai1;
            $totallantai2 = $datapengunjunglantai2 + $datatambahan->jumlahlantai2;
        }
 
        $datasetting = tbl_setting::all();
 
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

        $datapengguna = array(
            'jumlahpengunjunglantai1' => $totallantai1,
            'jumlahmakslantai1' => $jumlahmakslantai1,
            'jumlahpengunjunglantai2' => $totallantai2,
            'jumlahmakslantai2' => $jumlahmakslantai2
        );

        return response()->json($datapengguna, 200);
    }
}