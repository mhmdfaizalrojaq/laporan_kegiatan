<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;

class jadwalController extends Controller
{
    public function create()
    {
        return view('jadwal.create');
    }
    public function store(request $request)
    {
       
        $kode_jadwal = $request->kode_jadwal;
        $tanggal = $request->tanggal;
        $jam_mulai = $request->jam_mulai;
        $jam_berakhir = $request->jam_berakhir;
        $aktivitas = $request->aktivitas;
        $kode_mapel = $request->kode_mapel;

        jadwal::create([
            
            'kode_jadwal'=>$kode_jadwal,
            'tanggal'=>$tanggal,
            'jam_mulai'=>$jam_mulai,
            'jam_berakhir'=>$jam_berakhir,
            'aktivitas'=>$aktivitas,
            'kode_mapel'=>$kode_mapel,

        ]);
        return redirect('/jadwal');
    }
    public function delete($kode_jadwal)
    {
        $jadwal = jadwal::where ('kode_jadwal', $kode_jadwal);
        $jadwal->delete();

        return redirect('/jadwal');
    }
}
