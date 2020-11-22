<?php

namespace App\Http\Controllers;

use App\Models\tbl_pengaturangaris;
use Illuminate\Support\Facades\DB;

class PengaturangarisController extends Controller
{
    public function index_view()
    {
        return view('pages.pengaturangaris.pengaturangaris-data', [
            'pengaturangaris' => tbl_pengaturangaris::class
        ]);
    }
}
