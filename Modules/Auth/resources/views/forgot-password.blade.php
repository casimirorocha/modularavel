<x-guest-layout>
	<!-- Forgot Password Form -->
	<x-modularavel::form
		:title="trans('auth::module.page.forgot_password.title')"
		:description="trans('auth::module.page.forgot_password.description')"
		action="{{ route('password.email') }}"
		icon="question-circle"
		class="w-full max-w-md"
	>
		<!-- Email Address -->
		<x-modularavel::input
			autofocus
			name="email"
			type="email"
			:label="trans('auth::module.page.forgot_password.form.email')"
			icon="envelope-fill"
		/>

		<!-- Submit Button -->
		<x-modularavel::btn
			full-width
			:label="trans('auth::module.page.forgot_password.form.submit')"
			icon-right="arrow-right-circle"
		/>

		<div class="flex justify-center items-center">
			<!-- Go Back Button -->
			<x-modularavel::action-link
				onclick="window.history.back()"
			>
				<x-modularavel::icon name="arrow-left" />	{{ trans('auth::module.actions.go_back') }}
			</x-modularavel::action-link>
		</div>
	</x-modularavel::form>
</x-guest-layout>
