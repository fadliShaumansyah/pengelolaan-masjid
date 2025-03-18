<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalKegiatan extends Model {
    protected $table = 'activities';
    protected $fillable = [
        'nama_kegiatan', 
        'deskripsi', 
        'tanggal_mulai',
        'tanggal_selesai',
        'waktu_mulai',
        'waktu_selesai', 
        'status',
        'lokasi'
    ];
}

