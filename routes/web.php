<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EstudianteMateriaController;
use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


//ESTUDIANTES
Route::get('/estudiantes',[EstudianteController::class,'index'])->name('estudiantes.index');
Route::get('/estudiantes/create',[EstudianteController::class,'create'])->name('estudiantes.create');
Route::post('/estudiantes',[EstudianteController::class,'store'])->name('estudiantes.store');
Route::get('/estudiantes/{estudiante}',[EstudianteController::class,'show'])->name('estudiantes.show');
Route::get('/estudiantes/{estudiante}/edit',[EstudianteController::class,'edit'])->name('estudiantes.edit');
Route::put('/estudiantes/{estudiante}',[EstudianteController::class,'update'])->name('estudiantes.update');
Route::get('/estudiantes/{estudiante}/borrar',[EstudianteController::class,'borrar'])->name('estudiantes.borrar');
Route::delete('/estudiantes/{estudiante}',[EstudianteController::class,'destroy'])->name('estudiantes.delete');

//MATERIAS
Route::get('/materias',[MateriaController::class,'index'])->name('materias.index');
Route::get('/materias/create',[MateriaController::class,'create'])->name('materias.create');
Route::post('/materias',[MateriaController::class,'store'])->name('materias.store');
Route::get('/materias/{materia}',[MateriaController::class,'show'])->name('materias.show');
Route::get('/materias/{materia}/edit',[MateriaController::class,'edit'])->name('materias.edit');
Route::put('/materias/{materia}',[MateriaController::class,'update'])->name('materias.update');
Route::get('/materias/{materia}/borrar',[MateriaController::class,'borrar'])->name('materias.borrar');
Route::delete('/materias/{materia}',[MateriaController::class,'destroy'])->name('materias.delete');

//ASIGNACIONES
Route::get('/asignaciones',[EstudianteMateriaController::class,'index'])->name('asignaciones.index');
Route::get('/asignaciones/create',[EstudianteMateriaController::class,'create'])->name('asignaciones.create');
Route::post('/asignaciones',[EstudianteMateriaController::class,'store'])->name('asignaciones.store');

