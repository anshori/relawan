<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'POSKO.ID') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.css"/>
    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="POSKO.ID" title="POSKO.ID" height="28"/>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                        <li><a href="{{ route('daftar-posko') }}">Posko</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form method="post" action="/" class="search-head">
                                <input type="search" name="search">
                            </form>
                        </li>   
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    @include('layouts.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/map/leaflet.js') }}"></script>
    <script src="{{ asset('js/map/leaflet.extras.js') }}"></script>
    <script type="text/javascript" src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>
    <script src="{{ asset('js/map/KML.js') }}"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3.31&region=ID&language=id&key=AIzaSyAtqWsq5Ai3GYv6dSa6311tZiYKlbYT4mw&libraries=places"></script> 
    @if (Route::getCurrentRoute()->uri() == '/')
    @include('layouts.homescript')
    @endif
</body>
</html>
