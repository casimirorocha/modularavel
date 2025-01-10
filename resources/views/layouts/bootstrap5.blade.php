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
<body class="font-sans text-gray-900 antialiased min-h-screen flex flex-col items-center gap-3 justify-center">
{{--<div>
	<a href="{{ route('login') }}" up-cache="true" up-preload="true">
		<x-application-logo class="h-12 w-12 shadow fill-current text-gray-500 rounded-full" />
	</a>
</div>--}}

<div class="min-w-[40px] max-w-full p-4">
	<div class="card bg-body-secondary shadow">
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
