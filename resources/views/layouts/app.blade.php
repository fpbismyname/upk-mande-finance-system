<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Str::ucfirst(Str::replace('_', ' ', config('app.name', 'Laravel'))) }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">
    @auth
        @if (auth()->user()->role === 'admin')
            {{-- Admin Layout: Sidebar --}}
            <div class="flex min-h-screen">
                @include('layouts.sidebar')
                <div class="flex-1 flex flex-col">
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <div class="flex flex-row justify-between">
                                @isset($header_title)
                                    <h5 class="font-bold"> {{ $header_title }}</h5>
                                @else
                                    <h5 class="font-bold">{{ Str::ucfirst(Str::replace('_', ' ', config('app.name', 'Laravel'))) }}
                                    </h5>
                                @endisset
                                <h5>{{ auth()->user()->name }}</h5>
                            </div>
                        </div>
                    </header>

                    <main class="p-4">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        @else
            {{-- User Layout: Navbar --}}
            <div class="min-h-screen">
                @include('layouts.navigation')

                @isset($header)
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <main class="p-4">
                    {{ $slot }}
                </main>
            </div>
        @endif
    @else
        {{-- Guest Layout --}}
        <div class="min-h-screen">
            @include('layouts.navigation')

            <main class="p-4">
                {{ $slot }}
            </main>
        </div>
    @endauth
</body>

</html>