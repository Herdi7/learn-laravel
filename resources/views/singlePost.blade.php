@extends('layout/main')
@section('main')
<div class="row">
    <div class="col-md-8">
        <section class="section section-md bg-gray-100">
            <div class="container">
                <article>
                    <img src="{{ asset("storage/$post->image") }}" alt="" width="368" height="287"/>
                    <h1>{{ $post->title }} </h1>
                    {{-- <p class="text-danger">{{ $post->author }}</p> --}}
                    <div class="flex-row justify-content-between">
                        <p>Category : <a href="/Category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                        <p> By: <a href="/Authors/{{ $post->author->username }}">{{ $post->author->name }}</a></p>
                    </div>
                        <p>{!! $post->body !!}</p>
                </article>
            </div>
        </section>
    </div>
</div>
    
    
    <a href="/Blog" class="btn btn-danger mt-2">Kembali</a>
@endsection