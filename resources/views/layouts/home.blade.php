<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- FONTAWESOM --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="height: 50px;"><path fill="#ffd700" fill-opacity="1" d="M0,256L20,224C40,192,80,128,120,133.3C160,139,200,213,240,240C280,267,320,245,360,245.3C400,245,440,267,480,256C520,245,560,203,600,197.3C640,192,680,224,720,197.3C760,171,800,85,840,58.7C880,32,920,64,960,85.3C1000,107,1040,117,1080,128C1120,139,1160,149,1200,149.3C1240,149,1280,139,1320,122.7C1360,107,1400,85,1420,74.7L1440,64L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
            <div class="container">
                <a class="navbar-brand" href="{{ url('/welcome') }}" style="color: wheat; position: relative; right:190px">
                    {{ config('app.name', 'CAR-Project') }}
                </a>

                <ul class="nav nav-tabs">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">MENU</a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="{{ route('cars.all-cars') }}">Show all cars</a></li>
                          <li><a class="dropdown-item" href="{{ route('welcome') }}">Car Owners</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="{{ route('home') }}">Home page</a></li>
                        </ul>
                      </li>
                </ul>

            </div>
        </nav>

        <main class="py-4">

            @yield('content')

        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
