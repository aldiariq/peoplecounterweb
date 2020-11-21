<?php

namespace App\Http\Controllers;

use App\Models\tbl_kamera;

class KameraController extends Controller
{
    public function index_view ()
    {
        return view('pages.kamera.kamera-data', [
            'users' => tbl_kamera::class
        ]);
    }
}
