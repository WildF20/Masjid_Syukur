<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting, App\berita, App\about, App\profil;

class HomeController extends Controller
{
    public function index(){
        $about = about::first();
        $profil = profil::first();
        $setting = Setting::first();
        $berita = berita::get()->sortByDesc('created_at');
        return view('front.home', ['setting' => $setting, 'berita' => $berita, 'about' => $about, 'profil' => $profil]);
    }
}
