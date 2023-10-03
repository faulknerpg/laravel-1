<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
        <!-- test -->
        @yield('body')
        <!-- end test -->
        @livewireScripts
    </body>
</html>
