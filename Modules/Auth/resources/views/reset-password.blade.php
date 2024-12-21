<x-guest-layout>
    <!-- Form to reset password -->
    <form
        method="POST"
        action="{{ route('password.store') }}"
        class="grid grid-cols-1 gap-4"
        up-disable
        up-fail-target="form"
        up-scroll="auto"
        up-fail-scroll="form"
        up-target="form"
    >
        <!-- CSRF Token -->
        @csrf

        <!-- Title of the page -->
        <h2><x-modularavel::icon name="person-fill-lock" /> {{ __('Reset Password') }}</h2>

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <x-modularavel::input
            autofocus
            name="email"
            type="email"
            label="{{ __('Email Address') }}"
            icon="envelope-fill"
        />

        <!-- New Password -->
        <x-modularavel::input
            name="password"
            type="password"
            :label="__('New Password')"
            icon="lock-fill"
            autocomplete="new-password"
        />

        <!-- New Password Confirmation -->
        <x-modularavel::input
            name="password_confirmation"
            type="password"
            :label="__('Password Confirmation')"
            icon="lock-fill"
            autocomplete="new-password"
        />

         <!-- Submit Button -->
        <div>
            <x-modularavel::btn
                :label="__('Reset Password')"
                icon-right="check-circle"
                class="w-full"
            />
        </div>
    </form>
</x-guest-layout>
