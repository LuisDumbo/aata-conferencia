<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.jpeg') }}">

</head>

<body>

    {{ $slot }}

    <livewire:components.footer />

    @livewireScripts
    @stack('scripts')
</body>

</html>
