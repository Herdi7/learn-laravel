@extends('layout/main')

@section('main')
    @foreach ($posts as $post)
    <div class="mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <div class="border h-100 w-100 bg-light text-center">Gambar</div>
            </div>
          <div class="col">
            <div class="card-body">
              <h2 class="card-title"><a href="/Blog/{{ $post->slug }}" class="bold link-danger text-decoration-none">{{ $post->title }}</a></h2>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
@endsection

