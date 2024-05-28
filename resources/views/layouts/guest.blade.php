<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'joking.dev')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen">
<header>
    @include('partials.header')
</header>

<main class="flex-grow">
    @yield('content')
</main>

<footer>
    @include('partials.footer')
</footer>
</body>
</html>
