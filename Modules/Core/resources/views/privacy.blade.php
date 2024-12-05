@extends('core::layouts.master')

@section('content')
    <main>
        <h1>Hello Privacy</h1>
        <p>Module name: {!! config('core.name') !!}</p>
        <a up-back href="/core" class="btn btn-primary">
            Back
        </a>
    </main>
@endsection
