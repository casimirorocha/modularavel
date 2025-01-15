<x-guest-layout>
		<!-- Login Form -->
		<x-modularavel::form
			action="{{ route('login') }}"
			:title="trans('auth::module.page.login.title')"
			class="w-[400px] max-w-full"
			icon="lock-fill"
		>
			<!-- Forgot Password Link -->
			@if (Route::has('register'))
				<x-modularavel::action-link :href="route('register')" class="text-decoration-none fs-6 text-info">
					<x-modularavel::icon name="person-plus-fill" class="mr-2" /> {{ trans('auth::module.page.register.description') }}
				</x-modularavel::action-link>
			@endif

			<!-- Email Address -->
			<x-modularavel::input
				autofocus
				name="email"
				type="email"
				:label="trans('auth::module.page.login.form.email')"
				icon="envelope-fill"
			/>

			<!-- Password -->
			<x-modularavel::input
				name="password"
				id="passwordX"
				type="password"
				:label="trans('auth::module.page.login.form.password')"
				icon="key-fill"
				autocomplete="new-password"
			>
				<x-slot name="append"
						  class="cursor-pointer"
						  _="
							  on click if #passwordX.type === 'password'
							  then set #passwordX.type to 'text'
							  else if #passwordX.type === 'text'
							  then set #passwordX.type to 'password' end
							  on click toggle .bi-eye-slash-fill .bi-eye-fill on .icon
						 "
				>
					<x-modularavel::icon name="eye-slash-fill" class="icon" />
				</x-slot>
			</x-modularavel::input>

			<!-- Remember me -->
			<x-modularavel::checkbox
				name="remember"
				class="form-switch"
				role="switch"
				:label="trans('auth::module.page.login.form.remember_me')"
				checked="{{ old('remember') ? 'checked' : '' }}"
			/>

			<!-- Login Button and Forgot Password Link -->
			<div class="flex items-center justify-end">
				<!-- Forgot Password Link -->
				@if (Route::has('password.request'))
					<x-modularavel::action-link :href="route('password.request')" :label="trans('auth::module.page.forgot_password.title')"/>
				@endif

				<!-- Login Submit Button -->
				<x-modularavel::btn
					class="ml-5"
					size="md"
					:label="trans('auth::module.page.login.form.submit')"
					icon-right="unlock-fill"
				/>
			</div>
		</x-modularavel::form>
</x-guest-layout>
