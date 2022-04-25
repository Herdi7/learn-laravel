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
        return view('blog', [
            'title' => "Write by: $author->name",
            'mess' => "Write by: $author->name",
            'posts' => $author->posts->load('author', 'category')
        ]);

    }
}
