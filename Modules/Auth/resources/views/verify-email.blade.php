<x-guest-layout>
	<!-- Reset Password Form -->
	<x-modularavel::form
		class="w-[400px]"
		:action="route('verification.send')"
		:title="trans('auth::module.page.verify_email.title')"
		:description="trans('auth::module.page.verify_email.description')"
		icon="check-circle-fill"
		method="POST"
	>
		<x-modularavel::btn type="submit" class="w-full" color="success" :label="trans('auth::module.page.verify_email.form.submit')" icon-right="send" />
	</x-modularavel::form>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between w-full">
        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
			  <x-modularavel::btn size="sm" type="submit" color="secondary" class="w-full" :label="trans('auth::module.page.verify_email.form.logout')" />
        </form>
    </div>
</x-guest-layout>
