<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Recetas') }}</title>
	@yield('estilos')
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
			<div class="container">
				<a class="nav-link text-white" href="{{ route('estudiantes.index') }}">Estudiantes</a>	
				<a class="nav-link text-white" href="{{ route('materias.index') }}">Materias</a>
				<a class="nav-link text-white" href="{{ route('asignaciones.index') }}">Asignaciones</a>				
			</div>
		</nav>

		@yield('main');

		<div class="container">
			<div class="row">
				<div class="mt-4 col-12">
					@yield('botones')
				</div>

				<main class="py-4 col-12">
					@yield('content')
				</main>
			</div>
		</div>
	</div>

	@yield('scripts')
</body>
</html>