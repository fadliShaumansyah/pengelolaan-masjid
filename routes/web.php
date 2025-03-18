<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\masjid;
use App\Http\Controllers\jadwalkegiatancontroller;

Route::get('/', function () {
    return view('masjid.index');
});

Route::get('/masjid', [masjid::class, 'index']);

Route::get('/jadwal-kegiatan',[jadwalkegiatancontroller::class,'index']);