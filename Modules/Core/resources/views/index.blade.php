@extends('core::layouts.master')

@section('content')
    <main>
        <h1>Hello World</h1>
        <p>Module: {!! config('core.name') !!}</p>
        <br>
        <div class="input-group has-validation">
            <span class="input-group-text">@</span>
            <div class="form-floating is-invalid">
                <input type="text" class="form-control is-invalid" id="floatingInputGroup2" placeholder="Username" required>
                <label for="floatingInputGroup2">Username</label>
            </div>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
        <a up-href="{{ route('core.create') }}" up-follow class="btn btn-primary">
            Create
        </a>
    </main>
@endsection
