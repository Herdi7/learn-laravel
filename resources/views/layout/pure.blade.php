<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    {{-- bootstrap style --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ $styles['css'] ?? '' }}">
</head>
<body class="{{ $styles['body'] ?? '' }}">
    
    <div class="container">
        <div class="mt-3">
            @yield('main')
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>