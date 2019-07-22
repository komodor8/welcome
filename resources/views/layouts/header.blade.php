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

        @include('layouts.navbar')

        <div id="app">
            @yield('content')
        </div>

        <script src="{{ URL::asset('js/app.js') }} "></script>
    </body>
</html>
