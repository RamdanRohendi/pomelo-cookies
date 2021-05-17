<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pomela Cookies') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white font-weight-bolder" href="{{ url('/') }}">
                    {{ config('app.name', 'Pomela Cookies') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="px-2 text-white">Sell On Pomelo</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="px-2 text-white">Buy Wholesale</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="px-2 text-white">Indonesia</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="px-2 text-white">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="px-2 text-white">Customer Care</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="px-2 text-white">Bahasa/Eng</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="px-2 text-white">Wishlist</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="px-2 text-white">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="px-2 text-white">Account</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <label class="nav-line text-white"> | </label>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pt-4 px-2">
            @yield('content')
        </main>
    </div>
</body>
</html>
