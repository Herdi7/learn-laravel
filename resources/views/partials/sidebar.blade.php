@extends('layout/main')

@section('sidebar')
    @for ($i = 0; $i < 2; $i++)   
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    @endfor

@endsection 