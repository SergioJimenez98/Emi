@extends('layouts.app')


@section('botones')
  <a href="{{ route('estudiantes.index') }}" class="btn btn-outline-primary">&#8592; Volver</a>
@endsection

@section('content')
  <h2 class="text-center mb-2">Editar: {{ $estudiante->nombre }}</h2>
  <div class="row justify-content-center mt-2">
    <div class="col-md-8">
      <form action="{{ route('estudiantes.update', ['estudiante' => $estudiante->id]) }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
		@method('PUT')
        <div class="form-group">
          <label for="nombre">Nombre del estudiante</label>
          <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $estudiante->nombre }}">
          
          @error('nombre')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="correo">Correo</label>
          <input name="correo" id="correo" type="email" class="form-control @error('correo') is-invalid @enderror">
            
          @error('correo')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
       

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="+ Actualizar">
        </div>
      </form>
    </div>
  </div>
@endsection
