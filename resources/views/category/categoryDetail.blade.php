@extends('layout/main')

@section('main')
    <h1>Menampilkan postingan <span class="text-danger">"{{ $title }}"</span></h1>
    <ul>
      @foreach ($categories as $category)
          <li><a href="/Category/{{ $category->slug }}">{{ $category->name }}</a></li>
      @endforeach
    </ul>
@endsection


