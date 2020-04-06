<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\Calificacion;
use App\Dimension;
use App\Estudiante;
use App\Materia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActividadController extends Controller
{
    public function index()
    {
        return view('vistas.actividades.index',
            [
                'actividades' => Actividad::paginate(10),
            ]);
    }

    public function create()
    {
        return view('vistas.actividades.create',
            [
                'estudiantes' => Estudiante::orderBy('apellido_paterno','asc')
                    ->orderBy('apellido_materno','asc')
                    ->orderBy('nombre','asc')->get(),
                'materias' => Materia::all(),
                'dimensiones' => Dimension::all(),
            ]);
    }

    public function store(Request $request)
    {



        try {
            DB::beginTransaction();

            $actividad = new Actividad();
            $actividad->fecha = Carbon::createFromFormat('Y-m-d H:i:s',$request['fecha'].' 00:00:00')->timezone('America/La_Paz')->timestamp;
            $actividad->nombre = $request['nombre'];
            $actividad->materia_id = $request['materia_id'];
            $actividad->dimension_id = $request['dimension_id'];
            $actividad->save();

            $estudiante_id = $request->get('estudiante_id');
            $puntos = $request->get('puntos');
            $cont = 0;

            while ($cont < count($estudiante_id)) {
                $calificacion = new Calificacion();
                $calificacion->actividad_id = $actividad->id;
                $calificacion->estudiante_id = $estudiante_id[$cont];
                $calificacion->puntos = $puntos[$cont];
                $calificacion->save();

                $cont = $cont + 1;
            }

            DB::commit();

        } catch (Exception $e) {

            DB::rollback();

        }

        return redirect('actividades');

    }

    public function edit($id)
    {
        return view('vistas.actividades.edit',
            [
                'actividad' => Actividad::findOrFail($id),
                'estudiantes' => Estudiante::orderBy('apellido_paterno','asc')
                    ->orderBy('apellido_materno','asc')
                    ->orderBy('nombre','asc')->get(),
                'materias' => Materia::all(),
                'dimensiones' => Dimension::all(),
            ]);
    }

    public function destroy($id)
    {
        $actividad = Actividad::findOrFail($id);
        $actividad->delete();

        return redirect('actividades');
    }
}
