<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user/author',[
            'title' => 'Author List',
            'authors' => User::all()
        ]);
    }

    public function userPost(User $author)
    {
        return view('user/userPost', [
            'title' => $author->name,
            'posts' => $author->posts
        ]);

    }
}
