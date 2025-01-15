<x-app-layout>
	<div>
		<div class="row g-3">
			<div class="col-12">
				<h2 class="mb-0">{{ $title ?? __('All Users') }}</h2>
			</div>
			@forelse($users as $img)
				<div class="col-6 col-sm-4 col-md-3 col-xl-2 card-1">
					<x-modularavel::card.user-card :user="['match' => true, 'online' => true, 'img' => $img]"  />
				</div>
			@empty
				<div class="col-12">
					<p>{{ __('No users found.') }}</p>
				</div>
			@endforelse
			{{--<div class="col-6 col-sm-4 col-md-3 col-xl-2 card-1">
				<x-modularavel::card.user-card />
			</div>
			<div class="col-6 col-sm-4 col-md-3 col-xl-2 card-1">
				<x-modularavel::card.user-card />
			</div>
			<div class="col-6 col-sm-4 col-md-3 col-xl-2 card-1">
				<x-modularavel::card.user-card />
			</div>
			<div class="col-6 col-sm-4 col-md-3 col-xl-2 card-1">
				<x-modularavel::card.user-card />
			</div>
			<div class="col-6 col-sm-4 col-md-3 col-xl-2 card-1">
				<x-modularavel::card.user-card />
			</div>--}}
		</div>
	</div>
</x-app-layout>
