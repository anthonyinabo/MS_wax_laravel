<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<style type="text/css">
    .jumbotron {
    background-image: url(https://www.tissushop.fr/WebRoot/ce_fr3/Shops/263138/576C/2748/566E/6035/CD0D/C0A8/190D/902C/16-23-2.JPG);
    }
</style>

@yield('welcome')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: #0000;  box-shadow: 0px 15px 10px -15px #111;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                                    Logo
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

            <ul class="navbar-nav">
                 <li class="nav-item active">
                    <a class="nav-link" href="/robes">Nos Produits<span class="sr-only">(current)</span></a>
                </li>


                 <li class="nav-item active">
                    <a class="nav-link" href="/others"><span class="sr-only">(current)</span></a>
                </li>


                 <li class="nav-item active">
                    <a class="nav-link" href="#">A propos<span class="sr-only">(current)</span></a>
                </li>
                </ul>
                </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                            <a href="/cart"><i class="fa fa-cart-arrow-down" style="font-size:30px; color: black;">
                            <span class="badge badge-pill badge-danger" style="font-size: 12px;">{{ count((array) session('cart')) }}</span>
                            </i></a>
                  
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
