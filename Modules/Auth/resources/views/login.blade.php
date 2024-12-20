<x-guest-layout>
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
        <h2><x-modularavel::icon name="person-fill-lock" /> {{ $title }}</h2>

        <!-- Session Status -->
        <x-auth-session-status :status="session('status')"/>

        <!-- Email Address -->
        <x-modularavel::input
            autofocus
            name="email"
            type="email"
            :label="__('E-mail')"
            icon="envelope-fill"
        />

        <!-- Password -->
        <x-modularavel::input
            name="password"
            type="password"
            :label="__('Password')"
            icon="lock-fill"
            autocomplete="new-password"
        />

        <!-- Remember me -->
        <x-modularavel::checkbox
            name="remember"
            class="form-switch"
            role="switch"
            value="remember"
            :label="__('Remember-me')"
        />

        <!-- Login Button and Forgot Password Link -->
        <div class="flex items-center justify-end">

            <!-- Forgot Password Link -->
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <!-- Login Button -->
            <x-modularavel::btn
                type="submit"
                class="ml-5 shadow"
                :label="__('Login')"
                icon-right="box-arrow-in-right"
                size="lg"
            />
        </div>
    </form>
</x-guest-layout>
