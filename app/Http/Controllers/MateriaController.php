<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materias = Materia::get();
        return view('materias.index')->with('materias',$materias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        
        return view('materias.create');
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
        Materia::insert([
            'nombre'=>$data['nombre'],
            'descripcion'=>$data['descripcion']
        ]);
        return redirect()->route('materias.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
        return view('materias.show')->with('materia', $materia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        //
        return view('materias.edit')->with('materia', $materia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        //
        $materia->nombre = $request['nombre'];
        $materia->descripcion = $request['descripcion'];

        $materia->save();

        return redirect()->route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borrar(Materia $materia)
    {
        //
        return view('materias.delete')->with('materia',$materia);
    }

    public function destroy(Materia $materia)
    {
        //
        //$est = Materia::find($materia);
        $materia->delete();
        return redirect()->route('materias.index');
    }
}
