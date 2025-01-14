<x-guest-layout>
	<!-- Confirm Password Form -->
	<x-modularavel::form
		:action="route('password.confirm')"
		:title="trans('auth::module.page.confirm_password.title')"
		:description="trans('auth::module.page.confirm_password.description')"
		icon="lock-fill"
		autocomplete="off"
		method="POST"
	>
		<!-- Current Password -->
		<x-modularavel::input
			autofocus
			name="password"
			type="password"
			:label="trans('auth::module.page.confirm_password.form_fields.password')"
			icon="key-fill"
			autocomplete="new-password"
		/>

		<!-- Submit Button -->
		<x-modularavel::btn
			full-width
			:label="trans('auth::module.page.confirm_password.form_fields.submit')"
			icon-right="unlock-fill"
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
