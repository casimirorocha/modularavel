<x-guest-layout>
    <form class="grid grid-cols-1 gap-4"
          method="POST"
          action="{{ route('login') }}"
          up-disable
          up-fail-target="form"
          up-scroll="auto"
          up-fail-scroll="form"
    >
        @csrf

        <h2>{{ $title }}</h2>

        <!-- Session Status -->
        <x-auth-session-status :status="session('status')"/>

        <!-- Email Address -->
        <div class="input-group has-validation">

            <span class="input-group-text">@</span>

            <div @class(['form-floating', 'is-invalid' => $errors->has('email')])>

                <input
                    type="email"
                    name="password"
                    id="floatingEmailInput"
                    placeholder="name@example.com"
                    @class([
                        'form-control',
                        'is-invalid' => $errors->has('email')
                    ])
                >

                <label for="floatingEmailInput">Email</label>
            </div>

            <div class="invalid-feedback pt-1">
                {{ $errors->first('email') }}
            </div>
        </div>

        <!-- Password -->
        <div class="input-group has-validation">
            <span class="input-group-text">@</span>
            <div @class(['form-floating', 'is-invalid' => $errors->has('password')])>
                <input type="password" name="password"
                       @class(['form-control', 'is-invalid' => $errors->has('password')]) id="floatingPasswordInput"
                       placeholder="name@example.com">
                <label for="floatingPasswordInput">Password</label>
            </div>
            <div class="invalid-feedback pt-1">
                Please choose a username.
            </div>
        </div>

        <!-- Remember Me -->
        <div class="block">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                       name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
               href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-4">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
