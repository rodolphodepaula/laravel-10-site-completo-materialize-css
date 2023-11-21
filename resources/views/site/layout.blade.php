<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        {{-- css e javascript --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- css Materialize--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    </head>
    <body>
      {{-- conteúdo principal --}}
      @yield('content')

      {{-- JQUERY --}}
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      {{-- Javascript Materialize --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </body>
</html>
