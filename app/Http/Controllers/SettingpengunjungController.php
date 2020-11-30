<?php

namespace App\Http\Controllers;

use App\Models\tbl_settingpengunjung;
use App\Models\tbl_pengunjung;

class SettingpengunjungController extends Controller
{
    public function index_view ()
    {
        return view('pages.settingpengunjung.settingpengunjung-data', [
            'settingpengunjung' => tbl_settingpengunjung::class
        ]);
    }

    public function reset_pengguna()
    {
        tbl_pengunjung::truncate();
        
        return redirect('settingpengunjung');
        
    }
}
