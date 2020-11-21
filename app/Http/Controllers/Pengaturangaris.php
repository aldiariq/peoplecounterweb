<?php

namespace App\Http\Controllers;

use App\Models\tbl_pengaturangaris;

class Pengaturangaris extends Controller
{
    public function index_view ()
    {
        return view('pages.pengaturangaris.pengaturangaris-data', [
            'pengaturangaris' => tbl_pengaturangaris::class
        ]);
    }
}
