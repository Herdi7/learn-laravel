@extends('layout/main')
@section('main')
    <h1>{{ $post->title }} </h1>
    <p class="text-danger">{{ $post['author'] }}</p>
    <p>Category : <a href="/Category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <article>
        <p>{!! $post->body !!}</p>
    </article>
    <a href="/Blog" class="text-danger">Kembali</a>
@endsection