@extends('layout/main')

@section('main')
    @foreach ($authors as $author)
    <div class="list-group">
        <a href="/Authors/{{ $author->username }}" class="list-group-item list-group-item-action">{{ $author->name }}</a>
    </div>
    @endforeach
@endsection