<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKegiatan;

class jadwalkegiatancontroller extends Controller
{
    public function index()
    {
        $Kegiatans=JadwalKegiatan::all();

        return view('JadwalKegiatan.index', compact('Kegiatans'));
    }
}
