<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Farid LKHALDOUNI</title>
        <!-- assets -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>

    <body>

        <header>
            @include('layouts.navbar')
        </header>

        <div id="app">
            @yield('content')
        </div>

        @include('layouts.footer')

        <script src="{{ URL::asset('js/app.js') }} "></script>
        <script>
            var prevScrollpos = window.pageYOffset;
            window.onscroll = function() {
                var currentScrollPos = window.pageYOffset;
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("navbar").style.top = "0";
                } else {
                    document.getElementById("navbar").style.top = "-50px";
                }
                prevScrollpos = currentScrollPos;
            }
            </script>
    </body>
</html>
