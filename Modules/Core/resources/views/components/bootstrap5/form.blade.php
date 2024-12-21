@props([
	'icon' => null,
	'iconRight' => null,
   'title' => "Add title",
   'description' => null,
])

<div>
	<!-- Login Form -->
	<form {{ $attributes->merge([
	'class' => 'grid grid-cols-1 gap-4',
	'method'	=> 'POST',
	'action' => '/',
	'up-disable' => true,
	'up-fail-target' => 'form',
	'up-scroll' => 'form',
	'up-fail-scroll' => 'form',
	'up-target' => 'form'
]) }}
	>
		<!-- CSRF Token -->
		@csrf

		<div class="col-span-full">
			<!-- Page Title & Icon -->
			<h2 @class([
			'my-0 py-0',
			'flex items-center gap-2' => $icon && !$iconRight,
			'flex flex-row-reverse items-center justify-self-start gap-2' => $iconRight && !$icon,
		])
			>
				@if(isset($icon) || isset($iconRight))
					<x-modularavel::icon name="{{ $icon ?? $iconRight }}"/>
				@endif	{{ $title }}
			</h2>

			@isset($description)
				<!-- Form Description -->
				<div class="text-sm text-gray-600 dark:text-gray-400 mt-3">
					{{ $description ?? '' }}
				</div>
			@endisset
		</div>

		<!-- Session Status -->
		<x-auth-session-status :status="session('status')"/>

		<!-- Form Slot -->
		{{ $slot }}
	</form>
</div>
