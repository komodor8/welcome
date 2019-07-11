<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Farid LKHALDOUNI</title>
        <!-- assets -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <script src="{{ URL::asset('js/app.js') }} "></script>
        <!-- CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>

        @include('layouts.navbar')

        <div>
            @yield('content')
        </div>
