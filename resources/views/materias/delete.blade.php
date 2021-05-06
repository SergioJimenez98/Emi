@extends('layouts.app')


@section('botones')
  <a href="{{ route('materias.index') }}" class="btn btn-outline-primary">&#8592; Volver</a>
@endsection

@section('content')
  <h2 class="text-center mb-2">Editar: {{ $materia->nombre }}</h2>
  <div class="row justify-content-center mt-2">
    <div class="col-md-8">
      <form action="{{ route('materias.delete', ['materia' => $materia->id]) }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
		@method('DELETE')
        <div class="form-group">
          <label for="nombre">Nombre de la materia</label>
          <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $materia->nombre }}">
          
          @error('nombre')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <input name="descripcion" id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" value="{{ $materia->descripcion }}">
            
          @error('descripcion')
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
