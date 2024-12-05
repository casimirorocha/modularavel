@extends('layouts.guest')

@pushonce('assets')
    @vite([
        'Modules/Posts/resources/assets/sass/posts-module.scss',
        'Modules/Posts/resources/assets/js/posts-module.js',
    ])
@endpushonce

{{--
<x-guest-layout>
    @vite([
        'Modules/Posts/resources/assets/sass/posts-module.scss',
        'Modules/Posts/resources/assets/js/posts-module.js',
    ])

    @yield('content')
</x-guest-layout>
--}}
