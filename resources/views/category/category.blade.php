@extends('layout/main')

@section('main')
    @foreach ($categories as $category)
    <div class="list-group">
        <a href="/Category/{{ $category->slug }}" class="list-group-item list-group-item-action list-group-item-success">{{ $category->name }}</a>
      </div>
    @endforeach
@endsection