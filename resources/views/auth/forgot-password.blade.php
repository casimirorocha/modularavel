<x-guest-layout>
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" up-submit up-disable>
            @csrf

            <!-- Email Address -->
            <x-modularavel::input
                autofocus=""
                name="email"
                type="email"
                value="email"
                :label="__('E-mail')"
                icon="envelope-fill"
            />

            <div class="flex items-center justify-end mt-4">
                <x-modularavel::btn
                    type="submit"
                    class="ml-5 shadow"
                    :label="__('Email Password Reset Link')"
                    icon-right="box-arrow-in-right"
                    size="md"
                />
            </div>
        </form>
</x-guest-layout>
