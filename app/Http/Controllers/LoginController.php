<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/loginPage', [
            'title' => "Welcome Trav!",
            'styles' => [ 
                'body' => 'text-center',
                'css' => asset('css/signin.css')
            ]
        ]);
    }

    public function authenticate(Request $request)
    {
        $authenticate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($authenticate, $request->rememberMe ? true : false)) {
            $request->session()->regenerate();
            return redirect()->intended('/Dashboard');
        }

        return back()->with('loginErr', 'Login Gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/Login');
    }
}
