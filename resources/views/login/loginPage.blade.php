@extends('layout/pure')

@section('main')
<main class="form-signin">
  @if (session()->has('success'))
  <div class="alert alert-warning alert-dismissible fade show py-2" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
    <form method="post" action="/Register">
      @csrf
      <img class="mb-4" src="{{ asset('favicon.ico') }}" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">{{ $title }}</h1>
      @if ($title == 'Lets Join!')
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
      @endif
  
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
      
      @if ($title != 'Lets Join!')    
      <div class="checkbox mb-3">
        <label>
          <input  name="rememberMe" type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      @endif
      <button class="w-100 btn btn-lg btn-primary" type="submit">{{ ($title == 'Lets Join!') ? 'Daftar' : 'Masuk' }}</button>
      <div class="mt-3">
        <p>
            {!! ($title == 'Lets Join!') 
            ?'Sudah Punya Akun? <a href="/Login">Masuk</a> Sekarang' 
            :'Masih belum punya akun? <a href="/Register">Daftar</a> Sekarang' !!}
        </p>
      </div>
      <p class="mt-4 mb-4 text-muted">&copy; 2017–2021</p>
    </form>
  </main>
@endsection