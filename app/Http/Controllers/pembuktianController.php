<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;
use App\pembuktian;
use App\status;

class pembuktianController extends Controller
{
    public function create()
    {
        $jadwal = jadwal::get();
        $status = status::get();
        return view('pembuktian.create',compact('jadwal','status',$jadwal,$status));
    }
    public function store(request $request)
    {
        $kode_laporan = $request->kode_laporan;
        $kode_jadwal = $request->kode_jadwal;
        $waktu_pelaporan = $request->waktu_pelaporan;
        $status = $request->status;

        pembuktian::create([
            'kode_laporan'=>$kode_laporan,
            'kode_jadwal'=>$kode_jadwal,
            'waktu_pelaporan'=>$waktu_pelaporan,
            'status'=>$status,
        ]);
        return redirect('/pembuktian');
    }
    public function delete($kode_laporan)
    {
        $pembuktian = pembuktian::where ('kode_laporan', $kode_laporan);
        $pembuktian->delete();

        return redirect('/pembuktian');
    }
    
}
