<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, interactive-widget=resizes-content">
    <link rel="icon" href="{{ asset('icon/laravel.svg') }}" type="image/svg+xml">
    <link rel="shortcut icon" href="{{ asset('icon/laravel.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('icon/laravel.png') }}">

    <title>WorkLab360 || {{ $title }}</title>

    @vite(['resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
    <livewire:styles />
</head>

<body class="min-h-screen flex flex-col bg-gray-50 text-gray-800">

    {{-- NAVBAR --}}
    <header class="shadow bg-white">
        <x-layouts.navbar />
    </header>

    {{-- MAIN CONTENT --}}
    <main role="main" class="flex-1">
        <x-layouts.session />
        <div id="app" class="container mx-auto px-4 py-6">
            {{ $slot }}
        </div>
    </main>

    {{-- FOOTER  --}}
    <footer>
        <x-layouts.footer />
    </footer>

    <livewire:scripts />
</body>

</html>
