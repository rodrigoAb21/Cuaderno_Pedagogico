<?php

namespace App\Http\Controllers;

use App\Trimestre;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrimestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vistas.trimestres.index', [
            'trimestres'=>Trimestre::orderBy('inicio', 'asc')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vistas.trimestres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trimestre = new Trimestre();
        $trimestre->nombre = $request['nombre'];
        $trimestre->inicio = Carbon::createFromFormat('Y-m-d H:i:s',$request['inicio'].' 00:00:00')->timezone('America/La_Paz')->timestamp;
        $trimestre->fin = Carbon::createFromFormat('Y-m-d H:i:s',$request['fin'].' 00:00:00')->timezone('America/La_Paz')->timestamp;


        $trimestre->save();

        return redirect('trimestres');

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
        return view('vistas.trimestres.edit', ['trimestre'=>Trimestre::findOrFail($id)]);
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
        $trimestre = Trimestre::findOrFail($id);
        $trimestre->nombre = $request['nombre'];
        $trimestre->inicio = Carbon::createFromFormat('Y-m-d H:i:s',$request['inicio'].' 00:00:00')->timezone('America/La_Paz')->timestamp;
        $trimestre->fin = Carbon::createFromFormat('Y-m-d H:i:s',$request['fin'].' 00:00:00')->timezone('America/La_Paz')->timestamp;


        $trimestre->save();

        $trimestre->update();

        return redirect('trimestres');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trimestre = Trimestre::findOrFail($id);
        $trimestre->delete();

        return redirect('trimestres');
    }
}
