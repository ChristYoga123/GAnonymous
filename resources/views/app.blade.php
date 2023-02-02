<!DOCTYPE html>
<html x-data="data" lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/app.jsx'])
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Scripts -->
        <script src="{{ asset('js/init-alpine.js') }}"></script>

        <!-- Inertia --->
        @inertiaHead
</head>
<body>
    @inertia
</body>
</html>
