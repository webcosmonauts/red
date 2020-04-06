<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/logo-circular.png" />

        <title>{{ config('app.name') }}</title>

        @stack('head')
    </head>
    <body>
        @yield('main')
        @stack('body')
    </body>
</html>
