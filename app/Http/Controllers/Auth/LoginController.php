<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        
        $credentialLogin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($credentialLogin)) {
            return redirect('/admin');
        }else{
            return redirect()->back()->withErrors('Username atau Password salah');
        }
    }
}
