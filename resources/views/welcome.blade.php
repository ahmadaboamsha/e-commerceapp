<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        @if (app()->environment('local'))
            @vite('resources/css/app.css')
            @vite('resources/js/app.js')
        @else
            <link rel="stylesheet" href="{{ asset('build/assets/app-4TneagET.css') }}">
            <script src="{{ asset('build/assets/app-D8Q4ao9Q.js') }}" defer></script>
        @endif

        <title>E-commerce-app</title>

    </head>
    <body>
        <livewire:header />
        <livewire:hero-section />
        <livewire:product-section />
        <livewire:footer />

    </body>
</html>
