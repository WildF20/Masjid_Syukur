<?php

namespace App\Http\Controllers\Auth;

use DB;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterControllerKP extends Controller
{
    public function index()
    {
        return view('auth.register');
        
    }

    public function processRegister(Request $request)
    {
        DB::beginTransaction();
        $dataUser =[
            'username' => $request->user,
            'password' => bcrypt($request->password)
        ];
        $insertUser = User::create($dataUser);
        
        // $dataKaryawan =[
        //     'kar_user_id' => $insertUser->user_id,
        //     'kar_jab_id' => 2,
        //     'kar_nama' => $request->fullname,
        // ];

        // $insertKaryawan = karyawan::create($dataKaryawan);

        DB::commit();

        return redirect()->back()->with(['success' => "Registrasi Berhasil"]);
    }
}
