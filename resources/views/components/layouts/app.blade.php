<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles {{-- 🔥 FALTAVA ISTO --}}

    <title>{{ $title ?? 'Page Title' }}</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/logo.jpeg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    {{ $slot }}

    <livewire:components.footer />

    @livewireScripts
    @stack('scripts')
</body>

</html>
