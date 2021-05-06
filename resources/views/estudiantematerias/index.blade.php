@extends('layouts.app')

@section('estilos')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
@endsection

@section('botones')
  <a href="{{ route('asignaciones.create') }}" class="btn btn-outline-primary">+ Crear asignacione</a>
@endsection

@section('content')
    <?php 
        $cont = 0;
    ?>
  <h2 class="text-center mb-2">Materias asignadas</h2>
  <div class="col-md-12 mx-auto bg-white p-2">
    <table class="table">
      <thead class="bg-primary text-light">
        <tr>
          <th scole="col">Nombre</th>
          <th scole="col">Materias</th>
        </tr>
      </thead>     

      

      <tbody>
        @foreach ($asignaciones as $asignacion)
            
            <tr>
                <td>
                    @foreach ($estudiantes as $estudiante)
                        @if ($estudiante->id == $asignacion->id_estudiante)
                            {{$estudiante -> nombre}}
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach ($materias as $materia)
                        @if ($materia->id == $asignacion->id_materia)
                            {{$materia -> nombre}}
                        @endif
                    @endforeach
                </td>              
                
            </tr>
            <?php $cont++ ?>
		@endforeach
      </tbody>
    </table>

  </div>
@endsection