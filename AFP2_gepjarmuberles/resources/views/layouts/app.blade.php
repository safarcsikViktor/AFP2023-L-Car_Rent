<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent-A-Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')

    <div class="container">

        @if (Request::is('/')) <!--Csak akkor include-olja, ha a főoldalon vagyunk -->
            @include('inc.showcase')
        @endif

        <div class="row">
            <div class="col-md-8 col-lg-8 mx-auto">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="text-center" id="footer">
        <p>Rent-A-Car weboldal</p>
    </footer>

    @stack('scripts')
</body>
</html>
