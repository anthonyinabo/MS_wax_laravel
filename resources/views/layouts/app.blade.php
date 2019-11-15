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

    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<style type="text/css">

    .jumbotron {
    background-image: url(https://www.tissushop.fr/WebRoot/ce_fr3/Shops/263138/576C/2748/566E/6035/CD0D/C0A8/190D/902C/16-23-2.JPG);
    padding-bottom: 10%;
    }

    .text-uppercase {
    font-family: 'Staatliches', cursive;
    }


    nav.navbar {
        background-color:#0000;  
        box-shadow: 0px 15px 10px -15px #111;
    }

    .logo {
        font-size: 40px;
        font-family :'Great Vibes', cursive;
    }

    a.nav-link {
        font-size: 20px;
        margin: 10px;
        font-family: 'Quicksand', sans-serif;
    }
</style>

<div class="jumbotron jumbotron-fluid">
    <div class="mx-auto" style="width: 200px">
    </div>
</div>
    <div id="app">
        
<nav class="navbar navbar-expand-lg navbar-light text-dark">
  <a class="logo navbar-brand" href="/">Ms.wax</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="pl-5 collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link text-dark" href="/robes">Robes</a>
         <a class="nav-link text-dark" href="/vestes">Vestes</a>
            <a class="nav-link text-dark" href="/jupes">Jupes</a>
         <a class="nav-link text-dark" href="/other">Autres accessoires</a>
      <a class="nav-link text-dark" href="/about">A propos</a>
 </div>
            <a href="/cart"><i class="fa fa-cart-arrow-down" style="font-size:30px; color: black;">
         <span class="badge badge-pill badge-danger" style="font-size: 12px;">{{ count((array) session('cart')) }}</span>
        </i></a>
     </div>
    </nav>      
</div>

    <main class="py-4">
        @yield('content')
    </main>
  </div>
</body>


</html>
