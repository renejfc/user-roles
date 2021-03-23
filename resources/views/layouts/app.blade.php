<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'User-Roles') }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

       <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="grid grid-rows-8 min-h-screen">
        <header class="flex justify-center row-span-1">
            <x-navigation class="flex h-full w-9/12 items-center justify-evenly" />
        </header>
        <main class="flex justify-center row-span-7 overflow-y-hidden overflow-x-auto">
            {{ $slot }}
        </main>
    </body>
</html>