<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category/categoryDetail', [
            'title' => 'Category',
            'categories' => Category::all(),
            'active' => 'Category'
        ]);
    }

    public function category(Category $category)
    {
        // dd($category);
        return view('blog', [
            'title' => "Category",
            'posts' => $category->posts->load('author', 'category'),
            'active' => 'Category'
        ]);

    }
}
