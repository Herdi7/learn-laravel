<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function userPost(User $user)
    {
        // dd($category);
        return view('user/userPost', [
            'title' => $user->name,
            'posts' => $user->posts
        ]);

    }
}
