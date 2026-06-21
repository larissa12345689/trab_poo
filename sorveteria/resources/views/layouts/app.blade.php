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
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <div class="flex min-h-screen">
            <aside class="w-64 bg-pink-500 text-white p-6">
                <h2 class="text-2xl font-bold mb-6">🍦 Sorveteria</h2>

            <nav class="space-y-4">
                <a href="#" class="block hover:text-pink-200">Dashboard</a>
                <a href="#" class="block hover:text-pink-200">Clientes</a>
                <a href="#" class="block hover:text-pink-200">Produtos</a>
                <a href="#" class="block hover:text-pink-200">Fidelidade</a>
            </nav>

            <main class="flex-1 p-6 bg-gray-100">{{ $slot }}</main>
            </aside>
        </div>
    </body>
</html>
