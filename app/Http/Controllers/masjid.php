<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class masjid extends Controller
{
    public function index()
    {
        return view('masjid.index');
    }
}
