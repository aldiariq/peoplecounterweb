<?php

namespace App\Http\Controllers;

use App\Models\tbl_pengunjung;
use App\Models\tbl_setting;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public $tbl_pengunjung;
    

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

    public function tambah_pengguna($lantai, $jumlah)
    {
        for ($i=0; $i < $jumlah; $i++) { 
            $this->tbl_pengunjung['id_kamera'] = 0;
            $this->tbl_pengunjung['status'] = 1;
            $this->tbl_pengunjung['lantai'] = $lantai;

            tbl_pengunjung::create($this->tbl_pengunjung);
        }
        return redirect('pengunjung');
    }

    public function kurang_pengguna($lantai, $jumlah)
    {
        for ($i=0; $i < $jumlah; $i++) { 
            $this->tbl_pengunjung['id_kamera'] = 0;
            $this->tbl_pengunjung['status'] = 0;
            $this->tbl_pengunjung['lantai'] = $lantai;

            tbl_pengunjung::create($this->tbl_pengunjung);
        }

        return redirect('pengunjung');
    }
}
