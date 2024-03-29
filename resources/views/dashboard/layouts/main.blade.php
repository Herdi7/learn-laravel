<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Harubic Dashboard</title>
    
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('/js/trix.js') }}"></script>

    {{-- faether icons --}}
    <script src="https://unpkg.com/feather-icons"></script>

  </head>
  <body>
    
@include('dashboard/layouts/header')

<div class="container-fluid">
  <div class="row">
    @include('dashboard/layouts/sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-5">
      @yield('container')
    </main>
  </div>
</div>


<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard.js') }}"></script>
<script>
  feather.replace()
</script>
  </body>
</html>
