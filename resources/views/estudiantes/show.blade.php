@extends('layouts.app')

@section('botones')
  <a href="{{ route('estudiantes.index') }}" class="btn btn-outline-primary">&#8592; Volver</a>
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-md-10">
		<article class="contenido-receta">
			<h3 class="text-center mb-4">{{ $estudiante->nombre }}</h3>

			<div class="receta-meta mt-2">
				<p>
					<span class="font-weigh-bold text-danger">Correo</span>
					{{ $estudiante->correo }}
				</p>

				<p>
					<span class="font-weigh-bold text-danger">Fecha de registro:</span>
					{{ $estudiante->created_at }}
					
				</p>

				
			</div>
		</article>
	</div>
</div>
@endsection