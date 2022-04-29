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
            'authors' => User::all(),
            'active' => 'Author'
        ]);
    }

    public function userPost(User $author)
    {
        return view('blog', [
            'title' => "Write by: $author->name",
            'active' => 'Author',
            'posts' => $author->posts->load('author', 'category')
        ]);

    }
}
