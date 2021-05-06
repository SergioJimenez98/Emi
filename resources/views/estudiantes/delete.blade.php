@extends('layouts.app')


@section('botones')
  <a href="{{ route('estudiantes.index') }}" class="btn btn-outline-primary">&#8592; Volver</a>
@endsection

@section('content')
  <h2 class="text-center mb-2">Borrar: {{ $estudiante->nombre }}</h2>
  <div class="row justify-content-center mt-2">
    <div class="col-md-8">
      <form action="{{ route('estudiantes.delete', ['estudiante' => $estudiante->id]) }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
		@method('DELETE')
        <div class="form-group">
          <label for="nombre">Nombre del Estudiante</label>
          <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $estudiante->nombre }}">
          
          @error('nombre')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="correo">Correo</label>
          <input name="correo" id="correo" type="text" class="form-control @error('correo') is-invalid @enderror" value="{{ $estudiante->correo }}">
            
          @error('correo')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
       

        <div class="form-group">
          <input type="submit" class="btn btn-danger" value="+ Borrar">
        </div>
      </form>
    </div>
  </div>
@endsection
