<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembuktian extends Model
{
    protected $table = 'pembuktian';
    protected $fillable = ['kode_laporan','kode_jadwal', 'waktu_pelaporan','status'];
}

