<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
	<meta charset="utf-8" up-meta="false">
	<meta name="viewport" content="width=device-width, initial-scale=1" up-meta="false">
	<meta name="csrf-token" content="{{ csrf_token() }}" up-meta="false">

	<title>{{ $title ?? config('app.name', 'Laravel') }}</title>

	<link rel="dns-prefetch, preconnect" href="//fonts.gstatic.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/images/favicon-16x16.png') }}" up-meta="false">
	{{--<link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/images/favicon-32x32.png') }}" up-meta="false">--}}

	<!-- Default scripts -->
	@vite([
		'resources/sass/bootstrap.scss',
      'resources/css/app.css',
      'resources/js/app.js',
	])

	<!-- Push assets here -->
	@stack('styles')
</head>
<body class="font-sans antialiased min-h-screen">

@yield('content')

<!-- Push scripts here -->
@stack('scripts')
</body>
</html>
