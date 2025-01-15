@extends('spotlight::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('spotlight.name') !!}</p>
@endsection
