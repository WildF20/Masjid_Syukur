<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting, App\About, App\profil;

class VisiController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $profil = profil::first();
        $about = About::first();
        return view('front.visi', ['about' => $about, 'setting' => $setting, 'profil' => $profil]);
    }
}
