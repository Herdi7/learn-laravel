<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{

    public function create()
    {
        return view('login/register', [
            'title' => "Lets Join!",
            'styles' => [ 
                'body' => 'text-center',
                'css' => asset('css/signin.css')
            ]
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:4'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        
        return redirect('/Login')->with('success', 'pendaftaran telah berhasil, kamu bisa login sekarang!');
    }
}
