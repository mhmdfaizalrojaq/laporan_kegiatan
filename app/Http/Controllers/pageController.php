<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;
use App\pembuktian;

class pageController extends Controller
{
    public function jadwal()
    {
        $data = jadwal::all();
        return view('jadwal.index',['datajadwal'=>$data]);
    }
    public function pembuktian()
    {
        $data = pembuktian::all();
        return view('pembuktian.index',['datapembuktian'=>$data]);
    }
}
