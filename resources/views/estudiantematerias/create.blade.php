@extends('layouts.app')

@section('botones')
  <a href="{{ route('asignaciones.index') }}" class="btn btn-outline-primary">&#8592; Volver</a>
@endsection

@section('content')
  <h2 class="text-center mb-2">Registrar nuevo estudiante</h2>
  <div class="row justify-content-center mt-2">
    <div class="col-md-8">
      <form action="{{ route('asignaciones.store') }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="form-group">
          <label for="nombre">Nombre del Estudiante</label>
          {{-- Si hay un error agregate la clase is-invalid --}}
          {{-- Del ultimo request trae el utlimo valor para name=nombre --}}
          <select name="id_estudiante" id="id_estudiante" class="form-control @error('id_estudiante') is-invalid @enderror">
            @foreach ($estudiantes as $estudiante)
              <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="id_materia">Materia a Asignar</label>
          <select name="id_materia" id="id_materia" class="form-control">
            @foreach ($materias as $materia)
              <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
            @endforeach
          </select>
        </div>       


        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="+ Agregar">
        </div>
      </form>
    </div>
  </div>
@endsection
