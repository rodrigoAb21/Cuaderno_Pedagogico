<?php

namespace App\Http\Controllers;

use App\Estudiante;
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
        return view('views.estudiantes.index', [
            'estudiantes'=>Estudiante::orderBy('apellido_paterno','asc')
                ->orderBy('apellido_materno','asc')
                ->orderBy('nombre','asc')
                ->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('views.estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->apellido_paterno = $request['apellido_paterno'];
        $estudiante->apellido_materno = $request['apellido_materno'];
        $estudiante->nombre = $request['nombre'];
        $estudiante->ci = $request['ci'];
        $estudiante->rude = $request['rude'];
        $estudiante->fnac = $request['fnac'];
        $estudiante->edad = $request['edad'];
        $estudiante->tutor = $request['tutor'];
        $estudiante->telefono = $request['telefono'];
        $estudiante->direccion = $request['direccion'];

        $estudiante->save();

        return redirect('estudiantes');

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
        return view('views.estudiantes.edit', ['estudiante'=>Estudiante::findOrFail($id)]);
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
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->apellido_paterno = $request['apellido_paterno'];
        $estudiante->apellido_materno = $request['apellido_materno'];
        $estudiante->nombre = $request['nombre'];
        $estudiante->ci = $request['ci'];
        $estudiante->rude = $request['rude'];
        $estudiante->fnac = $request['fnac'];
        $estudiante->edad = $request['edad'];
        $estudiante->tutor = $request['tutor'];
        $estudiante->telefono = $request['telefono'];
        $estudiante->direccion = $request['direccion'];

        $estudiante->update();

        return redirect('estudiantes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        return redirect('estudiantes');
    }
}
