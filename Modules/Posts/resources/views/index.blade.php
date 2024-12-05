@extends('posts::layouts.master')

@section('content')
    <h6>Module:</h6>

    <h1 class="fw-bolder mb-4">{!! config('posts.name') !!}</h1>

    <a href="{{ route('login') }}" up-preload class="btn btn-secondary my-4 mr-3">
        Back
    </a>

    <a href="{{ route('blog.index') }}" class="btn btn-primary">
        Blog module
    </a>

    <div>
        <button
            role="button"
            class="btn btn-light"
            _="on click toggle .btn-light .btn-primary on me"
        >
            Toggle btn example
        </button>
    </div>
@endsection
