<x-guest-layout>
    <!-- Register Form -->
	<x-modularavel::form
		:title="trans('auth::module.page.register.title')"
		:description="trans('auth::module.page.register.description')"
		:action="route('register')"
		icon="person-plus-fill"
		class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-3"
	>
		<!-- Name -->
		<x-modularavel::input
			autofocus
			name="name"
			type="text"
			:label="trans('auth::module.page.register.form.name')"
			icon="person"
		/>

		<!-- Username -->
		<x-modularavel::input
			name="username"
			type="text"
			:label="trans('auth::module.page.register.form.username')"
			icon="threads"
		/>

		<!-- Email Address -->
		<x-modularavel::input
			name="email"
			type="email"
			:label="trans('auth::module.page.register.form.email')"
			icon="envelope-fill"
		/>

		<!-- Password -->
		<x-modularavel::input
			name="password"
			type="password"
			:label="trans('auth::module.page.register.form.password')"
			icon="lock-fill"
			autocomplete="new-password"
		/>

		<div>
			<!-- Password confirmation -->
			<x-modularavel::input
				name="password_confirmation"
				type="password"
				:label="trans('auth::module.page.register.form.password_confirmation')"
				icon="lock-fill"
				autocomplete="new-password"
			/>
		</div>

		<div class="col-span-full">
			<!-- Submit Button and link to login page -->
			<div class="flex items-center justify-end mt-4">
				<!-- Already registered? go to login -->
				<x-auth::action-link :href="route('login')" :label="trans('auth::module.page.register.already_registered')"/>

				<!-- Register Button -->
				<x-modularavel::btn
					class="ml-5"
					:label="trans('auth::module.page.register.form.submit')"
					icon-right="box-arrow-in-right"
				/>
			</div>
		</div>
	</x-modularavel::form>
</x-guest-layout>
