<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting, App\program, App\bidang, App\profil;

class ProgUnggulanController extends Controller
{
    public function index($key)
    {
        $profil = profil::first();
        switch ($key){
            case 'Dakwah':
                $setting = Setting::first();
                $bidang = bidang::where('idBidang', 6)->first();
                $program = program::all();
                return view('front.program', ['setting' => $setting, 'bidang' => $bidang, 'program' => $program, 'profil' => $profil]);
                break;
            case 'Sosma':
                $setting = Setting::first();
                $bidang = bidang::where('idBidang', 7)->first();
                $program = program::all();
                return view('front.program', ['setting' => $setting, 'bidang' => $bidang, 'program' => $program, 'profil' => $profil]);
                break;
            case 'Sarpras':
                $setting = Setting::first();
                $bidang = bidang::where('idBidang', 8)->first();
                $program = program::all();
                return view('front.program', ['setting' => $setting, 'bidang' => $bidang, 'program' => $program, 'profil' => $profil]);
                break;
            case 'Pendidikan':
                $setting = Setting::first();
                $bidang = bidang::where('idBidang', 9)->first();
                $program = program::all();
                return view('front.program', ['setting' => $setting, 'bidang' => $bidang, 'program' => $program, 'profil' => $profil]);
                break;
            case 'Remas':
                $setting = Setting::first();
                $bidang = bidang::where('idBidang', 10)->first();
                $program = program::all();
                return view('front.program', ['setting' => $setting, 'bidang' => $bidang, 'program' => $program, 'profil' => $profil]);
                break;
            case 'Keamanan':
                $setting = Setting::first();
                $bidang = bidang::where('idBidang', 11)->first();
                $program = program::all();
                return view('front.program', ['setting' => $setting, 'bidang' => $bidang, 'program' => $program, 'profil' => $profil]);
                break;
            case 'Publikasi':
                $setting = Setting::first();
                $bidang = bidang::where('idBidang', 12)->first();
                $program = program::all();
                return view('front.program', ['setting' => $setting, 'bidang' => $bidang, 'program' => $program, 'profil' => $profil]);
                break;
        }
    }
}

