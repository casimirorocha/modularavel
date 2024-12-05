@extends('layouts.guest')

@pushonce('assets')
    @vite([
       'Modules/Blog/resources/assets/sass/app.scss',
       'Modules/Blog/resources/assets/js/app.js',
   ])
@endpushonce
