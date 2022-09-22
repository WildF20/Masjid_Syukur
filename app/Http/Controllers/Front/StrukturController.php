<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\struktur, App\rolestruktur, App\bidang, App\profil;

class StrukturController extends Controller
{
    public function index(){
        $bidang = Bidang::get();
        $profil = profil::first();
        $rolestruktur = rolestruktur::get();
        $struktur = struktur::get();
        return view('front.struktur', ['bidang' => $bidang, 'rolestruktur' => $rolestruktur, 'struktur' => $struktur, 'profil' => $profil]);
    }
}
