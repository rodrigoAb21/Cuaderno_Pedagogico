<?php

namespace App\Http\Controllers;

use App\Asistencia;
use App\Detalle;
use App\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsistenciaController extends Controller
{
    public function index()
    {
        return view('vistas.asistencia.index',
            [
                'asistencias' => Asistencia::paginate(10),
            ]);
    }

    public function create()
    {
        return view('vistas.asistencia.create',
            [
                'estudiantes' => Estudiante::orderBy('apellido_paterno','asc')
                    ->orderBy('apellido_materno','asc')
                    ->orderBy('nombre','asc')->get(),
            ]);
    }

    public function show($id){
        return view('vistas.asistencia.show',
            [
                'asistencia' => Asistencia::findOrFail($id),
            ]);
    }


    public function store(Request $request)
    {

        //date("w", strtotime('2020-03-14')); YYYY-MM-DD devuelve la pos del dia 0->domingo 6->sabado

        try {
            DB::beginTransaction();

            $asistencia = new Asistencia();
            $asistencia->fecha = $request['fecha'];
            switch (date("w", strtotime($request['fecha']))) {
                case 0:
                    $asistencia->nombre = 'Domingo';
                    $asistencia->abreviatura = 'D';
                    break;
                case 1:
                    $asistencia->nombre = 'Lunes';
                    $asistencia->abreviatura = 'L';
                    break;
                case 2:
                    $asistencia->nombre = 'Martes';
                    $asistencia->abreviatura = 'M';
                    break;
                case 3:
                    $asistencia->nombre = 'Miercoles';
                    $asistencia->abreviatura = 'X';
                    break;
                case 4:
                    $asistencia->nombre = 'Jueves';
                    $asistencia->abreviatura = 'J';
                    break;
                case 5:
                    $asistencia->nombre = 'Viernes';
                    $asistencia->abreviatura = 'V';
                    break;
                default:
                    $asistencia->nombre = 'Sabado';
                    $asistencia->abreviatura = 'S';
                    break;
            }
            $asistencia->save();

            $estudiante_id = $request->get('estudiante_id');
            $cont = 0;

            while ($cont < count($estudiante_id)) {
                $detalle = new Detalle();
                $detalle->asistencia_id = $asistencia->id;
                $detalle->estudiante_id = $estudiante_id[$cont];
                $detalle->estado = $request['estado'.$cont];
                $detalle->save();

                $cont = $cont + 1;
            }

            DB::commit();

        } catch (Exception $e) {

            DB::rollback();

        }

        return redirect('asistencia');

    }

    public function destroy($id)
    {
        $asistencia = Asistencia::findOrFail($id);
        $asistencia->delete();

        return redirect('asistencia');
    }
}
