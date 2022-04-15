<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category/category', [
            'title' => 'List Category',
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category)
    {
        // dd($category);
        return view('category/categoryDetail', [
            'title' => $category->name,
            'posts' => $category->posts
        ]);

    }
}
