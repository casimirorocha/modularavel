<x-guest-layout>

    <!-- Register Form -->
    <form class="grid grid-cols-1 gap-4"
          method="POST"
          action="{{ route('register') }}"
          up-disable
          up-fail-target="form"
          up-scroll="auto"
          up-fail-scroll="form"
          up-target="form"
    >
            @csrf

            <!-- Logo and icon -->
            <h2><x-modularavel::icon name="person-add" /> {{ __('Register') }}</h2>

            <!-- Session Status -->
            <x-auth-session-status :status="session('status')"/>

            <!-- Name -->
            <x-modularavel::input
                autofocus=""
                name="name"
                type="text"
                :label="__('Name')"
                icon="person"
            />

            <!-- Email Address -->
            <x-modularavel::input
                autofocus=""
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

            <!-- Password confirmation -->
            <x-modularavel::input
                name="password_confirmation"
                type="password"
                :label="__('Confirm Password')"
                icon="lock-fill"
                autocomplete="new-password"
            />

            <!-- Submit Button and link to login page -->
            <div class="flex items-center justify-end mt-4">
                <!-- Already registered? go to login -->
                <a up-follow up-href="{{ route('login') }}" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                    {{ __('Already registered?') }}
                </a>

                <!-- Register Button -->
                <x-modularavel::btn
                    type="submit"
                    class="ml-5 shadow"
                    :label="__('Register')"
                    icon-right="box-arrow-in-right"
                    size="lg"
                />
            </div>
        </form>
</x-guest-layout>
