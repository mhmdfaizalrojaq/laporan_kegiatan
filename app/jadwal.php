<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['kode_jadwal','tanggal', 'jam_mulai','jam_berakhir','aktivitas','kode_mapel'];
}
