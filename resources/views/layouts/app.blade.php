<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

 <!-- Meta Tag -->
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name='copyright' content=''>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Title Tag  -->
 <title>Eshop - eCommerce HTML5 Template.</title>
 <!-- Favicon -->
 <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
 <!-- Web Font -->
 <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

 <!-- StyleSheet -->

 <!-- Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> --}}
 <!-- Magnific Popup -->
 <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
 <!-- Fancybox -->
 <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
 <!-- Themify Icons -->
 <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
 <!-- Nice Select CSS -->
 <link rel="stylesheet" href="{{ asset('css/niceselect.css') }}">
 <!-- Animate CSS -->
 <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
 <!-- Flex Slider CSS -->
 <link rel="stylesheet" href="{{ asset('css/flex-slider.min.css') }}">
 <!-- Owl Carousel -->
 <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
 <!-- Slicknav -->
 <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">

 <!--StyleSheet -->
 <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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
