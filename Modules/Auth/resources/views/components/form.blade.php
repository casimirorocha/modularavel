@props([
    'title' => null,
])

<!-- Login Form -->
<form class="grid grid-cols-1 gap-4"
      method="POST"
      action="{{ route('login') }}"
      up-disable
      up-fail-target="form"
      up-scroll="auto"
      up-fail-scroll="form"
      up-target="form"
>
    <!-- CSRF Token -->
    @csrf

    <!-- Page Title and Icon -->
    <h2><x-modularavel::icon name="person-fill-lock"/> {{ $title }}</h2>

    <!-- Session Status -->
    <x-auth-session-status :status="session('status')"/>


	{{ $slot }}

</form>
