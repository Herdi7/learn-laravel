<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title' => 'Blog',
            'posts' => Post::all()
        ]);
    }

    public function detail($slug)
    {
        return view('detail', [
            'title' => 'Single Post',
            'post' => Post::find($slug)
        ]);
    }
}
