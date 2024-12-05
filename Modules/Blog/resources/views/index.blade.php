@extends('blog::layouts.master', [
    'title' => 'Blog'
])

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('blog.name') !!}</p>

    <a href="{{ route('posts.index') }}" up-preload  class="btn btn-secondary my-4 mr-3">
        Back
    </a>
@endsection
