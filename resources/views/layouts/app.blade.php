<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8" up-meta="false">
    <meta name="viewport" content="width=device-width, initial-scale=1" up-meta="false">
    <meta name="csrf-token" content="{{ csrf_token() }}" up-meta="false">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" up-meta="false" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" up-meta="false" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://daddybrasilapp.test/favicon-16x16.png" up-meta="false">
    <link rel="icon" type="image/png" sizes="32x32" href="https://daddybrasilapp.test/favicon-32x32.png" up-meta="false">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('layouts.navigation')

    <main>
        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <section>
            @stack('assets')

            @isset($slot)
                @if($slot->isNotEmpty())
                    {{ $slot }}
                @else
                    @yield('content')
                @endif
            @else
                @yield('content')
            @endisset
        </section>
    </main>
</div>
</body>
</html>
