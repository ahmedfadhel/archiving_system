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
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container is-fullhd">
        @include('_partials._mainNav')
        <div class="main-container">
            <div class="right-container" id="side-nav">
                @include('_partials._sideNav')
            </div>
            <div class="left-container">
               
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script>
        const navBut = document.getElementsByClassName("navbar-burger")[0];
        const sideNav = document.getElementById('side-nav');

        navBut.addEventListener('click',function(){
            sideNav.classList.toggle('is-shown');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
        })
    </script>
    @yield('scripts')
</body>
</html>
