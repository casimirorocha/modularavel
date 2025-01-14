<x-guest-layout>
	<!-- Reset Password Form -->
	<x-modularavel::form
		:action="route('password.store')"
		:title="trans('auth::module.page.reset_password.title')"
		icon="arrow-repeat"
		method="POST"
	>
		<!-- Password Reset Token -->
		<input type="hidden" name="token" value="{{ $request->route('token') }}">

		<!-- Email Address -->
		<x-modularavel::input
			readonly
			name="email"
			type="email"
			:label="trans('auth::module.page.reset_password.form_fields.email')"
			icon="envelope-fill"
		/>

		<!-- New Password -->
		<x-modularavel::input
			autofocus
			name="password"
			type="password"
			:label="trans('auth::module.page.reset_password.form_fields.password')"
			icon="key-fill"
			autocomplete="new-password"
		/>

		<!-- New Password Confirmation -->
		<x-modularavel::input
			name="password_confirmation"
			type="password"
			:label="trans('auth::module.page.reset_password.form_fields.password_confirmation')"
			icon="key-fill"
			autocomplete="new-password"
		/>

		<!-- Submit Button -->
		<x-modularavel::btn
			full-width
			:label="trans('auth::module.page.reset_password.form_fields.submit')"
			icon-right="check-circle"
		/>

		<div class="flex justify-center items-center">
			<!-- Go Back Button -->
			<x-modularavel::action-link
				href="{{ route('login') }}"
			>
				<x-modularavel::icon name="arrow-left" />	{{ trans('auth::module.actions.go_back') }}
			</x-modularavel::action-link>
		</div>
	</x-modularavel::form>
</x-guest-layout>
