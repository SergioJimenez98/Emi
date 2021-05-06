@extends('layouts.app')

@section('estilos')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
@endsection

@section('botones')
  <a href="{{ route('materias.create') }}" class="btn btn-outline-primary">+ Crear Materia</a>
@endsection

@section('content')
  <h2 class="text-center mb-2">Gestion de Materias</h2>
  <div class="col-md-12 mx-auto bg-white p-2">
    <table class="table">
      <thead class="bg-primary text-light">
        <tr>
          <th scole="col">Nombre</th>
          <th scole="col">Descripcion</th>
          <th scole="col">Acciones</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($materias as $materia)
					<tr>
						<td class="middle">{{ $materia->nombre }}</td>
						<td class="middle">{{ $materia->descripcion }}</td>
						<td class="w170">
							<a href="{{ route('materias.show', ['materia' => $materia->id]) }}" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>
              <a href="{{ route('materias.edit', ['materia' => $materia->id]) }}" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
						  <a href="{{ route('materias.borrar', ['materia' => $materia->id]) }}" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>                            
						</td>
					</tr>
				@endforeach
      </tbody>
    </table>

  </div>
@endsection