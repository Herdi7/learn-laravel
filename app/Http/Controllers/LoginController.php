<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function register()
    {
        return view('login/loginPage', [
            'title' => "Lets Join!",
            'styles' => [ 
                'body' => 'text-center',
                'css' => asset('css/signin.css')
            ]
        ]);
    }
}
