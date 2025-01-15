@extends('layouts.bootstrap5')

@section('content')
	<div class="min-w-[450px] max-w-full p-4">
		<div class="card bg-body-secondary shadow">
			<div class="card-body">
				<main>
					{{ $slot }}
				</main>
			</div>
		</div>
	</div>
@endsection
