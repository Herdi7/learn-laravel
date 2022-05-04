@extends('dashboard/layouts/main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <section class="section section-md bg-gray-100">
                <div class="container">
                    <article class="my-3">
                        <img src="{{ asset('images/news-2-1-368x287.jpg') }}" alt="" width="368" height="287"/>
                        <h1>{{ $post->title }} </h1>
                        <a href="/Dashboard/posts" class="btn btn-success">Kembali</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                            <p>{!! $post->body !!}</p>
                    </article>
                </div>
            </section>
        </div>
</div>
</div>
@endsection