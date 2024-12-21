<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
	<meta charset="utf-8" up-meta="false">
	<meta name="viewport" content="width=device-width, initial-scale=1" up-meta="false">
	<meta name="csrf-token" content="{{ csrf_token() }}" up-meta="false">

	<title>{{ $title ?? config('app.name', 'Laravel') }}</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/images/favicon-16x16.png') }}" up-meta="false">
	{{--<link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/images/favicon-32x32.png') }}" up-meta="false">--}}

	<!-- Default scripts -->
	@vite([
		 'resources/sass/bootstrap5.scss',
		 'resources/css/app.css',
		 'resources/js/app.js'
	])

	<!-- Push assets here -->
	@stack('styles')
</head>
<body class="font-sans text-gray-900 antialiased min-h-screen flex flex-col items-center gap-4 justify-center">
<div>
	<a href="{{ route('login') }}" up-cache="true" up-preload="true">
		<x-application-logo class="h-16 w-16 shadow fill-current text-gray-500 rounded-full" />
	</a>
</div>

<div class="w-full max-w-fit">
	<div class="card bg-body-secondary mx-3 px-0 py-2 shadow">
		<div class="card-body">
			<main>
				@stack('assets')

				@isset($slot)
					@if($slot->isNotEmpty())
						{{ $slot }}
					@else
						@yield('content')
					@endif
				@else
					@yield('content')
				@endisset
			</main>
		</div>
	</div>
</div>

<!-- Push scripts here -->
@stack('scripts')
</body>
</html>
