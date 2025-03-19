<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class keuanganmasjid extends Model
{
    protected $table = 'keuangan_masjid';

    protected $fillable = [
        'tanggal_transaksi',
        'jenis_transaksi',
        'kategori',
        'jumlah',
        'keterangan',
        'bukti_transaksi',
        ];
}
