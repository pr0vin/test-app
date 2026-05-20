<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">

    <header>

        @include('layouts.partials.navbar')
    </header>

    @if (session('success'))
        <div>
            <div
                class="text-green-600 mb-4 bg-green-100 border-t-4 border-green-500 rounded-b text-base px-4 py-3 shadow-md">
                {{ session('success') }}
            </div>
        </div>
    @endif
    <main class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-7xl mx-auto min-h-screen">
        {{ $slot }}
    </main>


    <footer>
        @include('layouts.partials.footer')
    </footer>
    {{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div> --}}
</body>

</html>
