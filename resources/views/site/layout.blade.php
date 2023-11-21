<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        {{-- css e javascript --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
      {{-- conteúdo principal --}}
      @yield('content')

    </body>
</html>
