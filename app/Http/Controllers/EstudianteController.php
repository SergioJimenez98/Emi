<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estudiantes = Estudiante::get();
        return view('estudiantes.index')->with('estudiantes',$estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        
        return view('estudiantes.create');
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
        Estudiante::insert([
            'nombre'=>$data['nombre'],
            'correo'=>$data['correo']
        ]);
        return redirect()->route('estudiantes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
        return view('estudiantes.show')->with('estudiante', $estudiante);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        //
        return view('estudiantes.edit')->with('estudiante', $estudiante);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        //
        $estudiante->nombre = $request['nombre'];
        $estudiante->correo = $request['correo'];

        $estudiante->save();

        return redirect()->route('estudiantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function borrar(Estudiante $estudiante)
    {
        //
        return view('estudiantes.delete')->with('estudiante',$estudiante);
    }

    public function destroy(Estudiante $estudiante)
    {
        //
        //$est = Estudiante::find($estudiante);
        $estudiante->delete();
        return redirect()->route('estudiantes.index');
    }
}
