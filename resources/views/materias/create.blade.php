@extends('layouts.app')

@section('botones')
  <a href="{{ route('materias.index') }}" class="btn btn-outline-primary">&#8592; Volver</a>
@endsection

@section('content')
  <h2 class="text-center mb-2">Registrar nueva materia</h2>
  <div class="row justify-content-center mt-2">
    <div class="col-md-8">
      <form action="{{ route('materias.store') }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="form-group">
          <label for="nombre">Nombre del materia</label>
          {{-- Si hay un error agregate la clase is-invalid --}}
          {{-- Del ultimo request trae el utlimo valor para name=nombre --}}
          <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
          {{-- Mesanje de error para el request de name=nombre --}}
          @error('nombre')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <input name="descripcion" id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror">
            

          @error('descripcion')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>       


        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="+ Agregar">
        </div>
      </form>
    </div>
  </div>
@endsection
