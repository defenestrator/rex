<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="favicon-200.png">
    <link rel="apple-touch-icon-precomposed" href="favicon-120.png">
    <link rel="icon" href="favicon-120.png">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
</head>

<body class="antialiased bg-gray-100 dark:bg-gray-900"
    style="min-height: 100vh; background:linear-gradient(rgba(245,245, 245, 0.05), rgba(20,40,20,1.0)) center top no-repeat">
    <div class="block items-top justify-center sm:items-center py-4 sm:pt-0 px-2"
        style="height:44vh; min-height:360px;">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 px-6 py-4 block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="mt-8 mx-auto" style="width:300px; min-width:200px;">
            <img class="py-4" src="/img/logo.png" alt="Intermountain Reptile Experience Center"
                title="Intermountain Reptile Experience Center">
        </div>
    </div>
    <div class="flex items-top justify-center sm:items-center py-4 sm:pt-0 px-2 mt-4">
        <div class="mx-auto, text-3xl">
            Coming soon!
        </div>
    </div>
</body>

</html>
