<?php

namespace App\Http\Controllers;

use App\Models\tbl_setting;

class Setting extends Controller
{
    public function index_view ()
    {
        return view('pages.setting.setting-data', [
            'setting' => tbl_setting::class
        ]);
    }
}
