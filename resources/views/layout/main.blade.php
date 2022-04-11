<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HArubic | {{ $title }} </title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    {{-- navbar --}}
    @include('partials/navbar')
    
    {{-- content --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                @yield('main')
            </div>
            <div class="col-md-4">
                {{-- @include('partials/sidebar') --}}
            </div>
        </div>
    </div>


    <!-- js -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>