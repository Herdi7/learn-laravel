<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        $title = 'All Post';
        if( request('search') ) {
            $title = "Search";
        }
        return view('blog', [
            'title' => $title,
            'posts' => Post::with('author', 'category')->Filter(request(['search', 'category', 'author']))->latest()->paginate(7)->withQueryString(),
            'categories' => Category::latest()->get(),
            'authors' => User::latest()->get(),
            'active' => 'Blog'
        ]);
    }
    
    public function detail(Post $post)
    {
        return view('singlePost', [
            'title' => 'Single Post',
            'post' => $post,
            'active' => 'Blog'
        ]);
    }
}
