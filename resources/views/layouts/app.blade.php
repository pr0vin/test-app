<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'My App' }}</title>
    {{-- <title>@yield('title', 'My App')</title> --}}

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

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
        @yield('content')
    </main>


    <footer>
        @include('layouts.partials.footer')
    </footer>


</body>

</html>
