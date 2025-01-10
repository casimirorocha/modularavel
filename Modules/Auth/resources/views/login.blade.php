<x-guest-layout>
		<!-- Login Form -->
		<x-modularavel::form action="{{ route('login') }}"
									:title="trans('auth::module.page.login.title')"
									class="w-[400px] max-w-full"
									icon="lock"
		>

			<!-- Forgot Password Link -->
			@if (Route::has('register'))
				<x-modularavel::action-link :href="route('register')" class="text-decoration-none fs-6 text-info">
					<x-modularavel::icon name="person-plus-fill" class="mr-2" /> {{ trans('auth::module.page.login.actions.register') }}
				</x-modularavel::action-link>
			@endif
			<!-- End Forgot Password Link -->

			<!-- Email Address -->
			<x-modularavel::input
				autofocus
				name="email"
				type="email"
				:label="trans('auth::module.page.login.form.email')"
				icon="envelope-fill"
			/>
			<!-- End Email Address -->

			<!-- Password -->
			<x-modularavel::input
				name="password"
				type="password"
				:label="trans('auth::module.page.login.form.password')"
				icon="lock-fill"
				autocomplete="new-password"
			/>
			<!-- End Password -->

			<!-- Remember me -->
			<x-modularavel::checkbox
				name="remember"
				class="form-switch"
				role="switch"
				:label="trans('auth::module.page.login.form.remember_me')"
			/>
			<!-- End Remember me -->

			<!-- Login Button and Forgot Password Link -->
			<div class="flex items-center justify-end">
				<!-- Forgot Password Link -->
				@if (Route::has('password.request'))
					<x-modularavel::action-link :href="route('password.request')" :label="trans('auth::module.page.login.actions.forgot_password')"/>
				@endif
				<!-- End Forgot Password Link -->

				<!-- Login Submit Button -->
				<x-modularavel::btn
					class="ml-5"
					size="md"
					:label="trans('auth::module.page.login.actions.submit')"
					icon-right="box-arrow-in-right"
				/>
				<!-- End Login Submit Button -->
			</div>
			<!-- End Login Button and Forgot Password Link -->
		</x-modularavel::form>
		<!-- End Login Form -->
</x-guest-layout>
