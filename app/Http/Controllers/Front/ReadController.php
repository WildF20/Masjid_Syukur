<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting, App\berita, App\about, App\profil;

class ReadController extends Controller
{
    public function index($judul)
    {
        $about = about::first();
        $profil = profil::first();
        $berita = berita::where('slug_judul', $judul)->first();
        return view('front.home_read_berita', ['berita' => $berita, 'about' => $about, 'profil' => $profil]);
    }
}
