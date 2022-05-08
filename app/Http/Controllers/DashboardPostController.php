<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/post/index', [
            'posts' => Post::where('user_id', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/post/create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:2000',
            'category_id' => 'required',
            'body' => 'required'
        ]);
        if( $request->file('image') ){
            $validatedData['image'] = $request->file('image')->store('post-image');
        } else {
            $validatedData['image'] = 'post-image/Default.jpg';
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] =  Str::limit(strip_tags($request->body), 100);

        Post::create($validatedData); 

        return redirect('/Dashboard/posts')->with('success', 'Blog Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard/post/show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard/post/edit', [
            'categories' => Category::all(),
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ];

        if( $request->slug != $post->slug ) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);
        $validatedData['excerpt'] =  Str::limit(strip_tags($request->body), 100);
        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/Dashboard/posts')->with('success', 'Blog Baru Telah Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id); 

        return redirect('/Dashboard/posts')->with('success', 'Post Telah Dihapus');
    }

    public function getSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
