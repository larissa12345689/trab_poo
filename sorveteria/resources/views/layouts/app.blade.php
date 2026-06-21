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
    <body class="font-nunito antialiased">
             {{-- @include('layouts.navigation')  --}}

        <div class="flex min-h-screen">
            <aside class="w-64 bg-rose-500 text-white  p-6">

                <div class="flex items-center mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#FFF"><path d="M479-40 298-408q-69 12-123.5-30T120-555q0-45 27.5-88t80.5-58q16-99 88.5-159T480-920q91 0 163 60t89 159q53 15 80.5 58t27.5 88q0 75-56.5 117T664-408L479-40ZM266-465q18 0 34-5t25-14l26-27 23 20q25 17 54.5 21.5T483-465q25 0 51-4.5t51-21.5l24-20 25 27q9 9 25.5 14t33.5 5q34 0 60.5-27.5T780-555q0-31-19-54t-54-29l-35-5-2-39q-11-79-61.5-128.5T480-860q-78 0-129 49.5T290-682l-3 39-35 8q-30 8-51 28.5T180-555q0 35 26.5 62.5T266-465Zm213 289 128-252-6-6q-28 15-60.5 22t-57.5 7q-32 0-65-7t-58-22l-6 5 125 253Zm1-486Z"/></svg>
                    <h2 class="text-2xl font-extrabold ">IceCream</h2>
                </div>
                    
                <nav class="space-y-4">
                    <a href="{{ route('dashboard') }}" class="block hover:text-pink-200">Dashboard</a>

                    <a href="#" class="block hover:text-pink-200">Clientes</a>

                    <a href="#" class="block hover:text-pink-200">Produtos</a>

                    <a href="#" class="block hover:text-pink-200">Fidelidade</a>
                </nav>

            </aside>

        <div class="flex-1 bg-rose-50">

            @isset($header)
                <header class="bg-rose-50 shadow">
                    <div class="px-6 py-4 flex items-center ">
                        {{ $header }}
                    </div>
                </header>
            @endisset
            <main class="p-6">
                {{ $slot }}
            </main>
        </div>

    </div>

        
    </body>
</html>
