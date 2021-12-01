<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Papito pizza</title>

    <!-- Scripts -->
    <script src="{{ asset('js/front.js') }}" defer></script>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- Styles -->
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">

    {{-- @include('front.css') //atkomentuoti kai sutvarkysiu faila sita --}}
</head>
@include('layouts.svg')
</body>
</html>
