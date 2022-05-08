@extends('dashboard/layouts/main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <section class="section section-md bg-gray-100">
                <div class="container">
                    <article class="my-3">
                        <img src="{{ asset("storage/$post->image") }}" alt="" width="368" height="287"/>
                        <h1>{{ $post->title }} </h1>
                        <a href="/Dashboard/posts" class="btn btn-success">Kembali</a>
                        <a href="/Dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/Dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin Mau Hapus?')">Delete</button>
                          </form>
                            <p>{!! $post->body !!}</p>
                    </article>
                </div>
            </section>
        </div>
</div>
</div>
@endsection