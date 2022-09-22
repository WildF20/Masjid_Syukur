<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting, App\kajian, App\profil;

class KajianController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $profil = profil::first();
        $kajian = kajian::all();
        return view('front.kajian', ['setting' => $setting, 'kajian' => $kajian, 'profil' => $profil]);
    }
}

