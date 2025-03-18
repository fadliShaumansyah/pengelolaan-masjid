<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\masjid;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/masjid', [masjid::class, 'index']);