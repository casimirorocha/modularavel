<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="utf-8" up-meta="false">
        <meta name="viewport" content="width=device-width, initial-scale=1" up-meta="false">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" up-meta="false" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" up-meta="false" />

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="https://daddybrasilapp.test/favicon-16x16.png" up-meta="false">
        <link rel="icon" type="image/png" sizes="32x32" href="https://daddybrasilapp.test/favicon-32x32.png" up-meta="false">

        <!-- Scripts -->
        @vite([
            'resources/css/app.css',
            'resources/sass/bootstrap5.scss',
            'resources/js/app.js'
        ])
    </head>
    <body class="font-sans text-gray-900 antialiased min-h-screen flex flex-col items-center gap-4 justify-center">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-10/12 sm:max-w-md">
                <main>
                    <div class="card bg-body-tertiary px-0 py-2 shadow">
                        <div class="card-body">
                            {{ $slot }}
                        </div>
                    </div>
                </main>
            </div>
    </body>
</html>
