<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\EstudianteMateria;
use App\Models\Materia;
use Illuminate\Http\Request;

class EstudianteMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $asignaciones = EstudianteMateria::get();
        $estudiantes = Estudiante::get();
        $materias = Materia::get();

        $asignaciones = EstudianteMateria::get();
        $estudiantes = Estudiante::get();
        $materias = Materia::get();

        $nombreEst = [];
        $nombreMat = [];
        $idMaterias = [];
        $idEstudiantes = [];
        $contE = 0;
        $contM = 0;
        foreach ($estudiantes as $estudiante) {
            $nombreEst[$contE] = $estudiante->nombre;
            $idEstudiantes[$contE] = $estudiante->id;
            $contE++;
        }
        foreach ($materias as $materia) {
            $nombreMat[$contM] = $materia->nombre;
            $idMaterias[$contM] = $materia->id;
            $contM++;
        }

        return view('estudiantematerias.index')
            ->with('asignaciones',$asignaciones)
            ->with('estudiantes',$estudiantes)
            ->with('materias',$materias)
            ->with('nombreEst',$nombreEst)
            ->with('nombreMat',$nombreMat)
            ->with('idEstudiantes',$idEstudiantes)
            ->with('idMaterias',$idMaterias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $asignaciones = EstudianteMateria::get();
        $estudiantes = Estudiante::get();
        $materias = Materia::get();
        return view('estudiantematerias.create')
        ->with('asignaciones',$asignaciones)
        ->with('estudiantes',$estudiantes)
        ->with('materias',$materias);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request;
        EstudianteMateria::insert([
            'id_estudiante'=>$data['id_estudiante'],
            'id_materia'=>$data['id_materia']
        ]);
        return redirect()->route('asignaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
