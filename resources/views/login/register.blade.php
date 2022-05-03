@extends('layout/pure')

@section('main')
<main class="form-signin">
    <form method="post" action="/Register">
      @csrf
      <img class="mb-4" src="{{ asset('favicon.ico') }}" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">{{ $title }}</h1>
      <div class="form-floating">
        <input  name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingName" value="{{ old('name') }}" placeholder="Your Name">
        <label for="floatingName">Name</label>
        <div id="floatingNameFeedback" class="invalid-feedback mb-1">
          {{ $errors->first('name') }}
        </div>
      </div>
      <div class="form-floating">
        <input  name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" value="{{ old('email') }}" placeholder="Email here...">
        <label for="floatingEmail">Email</label>
        <div id="floatingEmailFeedback" class="invalid-feedback mb-1">
          {{ $errors->first('email') }}
        </div>
      </div>
  
      <div class="form-floating">
        <input  name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="floatingUsername" value="{{ old('username') }}" placeholder="username">
        <label for="floatingUsername">Username</label>
        <div id="floatingUsernameFeedback" class="invalid-feedback mb-1">
          {{ $errors->first('username') }}
        </div>
      </div>
      <div class="form-floating">
        <input  name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        <div id="floatingPasswordFeedback" class="invalid-feedback mb-1">
          {{ $errors->first('password') }}
        </div>
      </div>
      
      <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
      <div class="mt-3">
        <p>
            Sudah Punya Akun? <a href="/Login">Masuk</a> Sekarang' 
        </p>
      </div>
      <p class="mt-4 mb-4 text-muted">&copy; 2017–2021</p>
    </form>
  </main>
@endsection