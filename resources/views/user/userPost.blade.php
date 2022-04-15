@extends('layout/main')

@section('main')
    <h1 class="mb-4 text-center">Dari {{ '@'.$title }}</h1>
    @foreach ($posts as $post)
        <div class="mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="border h-100 w-100 bg-light text-center">Gambar</div>
                </div>
            <div class="col">
            <div class="card-body">
              <h2 class="card-title"><a href="/Blog/{{ $post->slug }}" class="bold link-danger text-decoration-none">{{ $post->title }}</a></h2>
              <p class=""><small class="text-muted">{{ $post->category->name }}</small></p>
              <p class="card-text">By {{ $post->excerpt }}</p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    
@endsection