@extends('layouts.app')

@section('estilos')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
@endsection

@section('botones')
  <a href="{{ route('estudiantes.create') }}" class="btn btn-outline-primary">+ Crear Estudiante</a>
@endsection

@section('content')
  <h2 class="text-center mb-2">Gestion de Estudiantes</h2>
  <div class="col-md-12 mx-auto bg-white p-2">
    <table class="table">
      <thead class="bg-primary text-light">
        <tr>
          <th scole="col">Nombre</th>
          <th scole="col">Correo</th>
          <th scole="col">Acciones</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($estudiantes as $estudiante)
					<tr>
						<td class="middle">{{ $estudiante->nombre }}</td>
						<td class="middle">{{ $estudiante->correo }}</td>
						<td class="w170">
							<a href="{{ route('estudiantes.show', ['estudiante' => $estudiante->id]) }}" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('estudiantes.edit', ['estudiante' => $estudiante->id]) }}" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
						    <a href="{{ route('estudiantes.borrar', ['estudiante' => $estudiante->id]) }}" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>                            
						</td>
					</tr>
				@endforeach
      </tbody>
    </table>

  </div>
@endsection