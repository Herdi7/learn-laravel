<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $post = Post::with('author', 'category');
        $title = 'Blog';
        $mess = 'All Post';
        if( request('search') ) {
            $req = request('search');
            $post = Post::where('title', 'like', "%$req%");
            $title = "Search";
            $mess = "Result For '$req'";
        }
        return view('blog', [
            'title' => $title,
            'posts' => $post->latest()->get(),
            'mess' => $mess
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
