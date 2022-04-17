@extends('layout/main')
@section('main')
    <h1>{{ $post->title }} </h1>
    {{-- <p class="text-danger">{{ $post->author }}</p> --}}
    <div class="flex-row justify-content-between">
        <p>Category : <a href="/Category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p> By: <a href="/Authors/{{ $post->author->username }}">{{ $post->author->name }}</a></p>
    </div>
    <article>
        <p>{!! $post->body !!}</p>
    </article>
    <a href="/Blog" class="text-danger">Kembali</a>
@endsection