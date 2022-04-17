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
            'posts' => Post::latest()->get()
        ]);
    }

    public function detail(Post $post)
    {
        return view('singlePost', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
