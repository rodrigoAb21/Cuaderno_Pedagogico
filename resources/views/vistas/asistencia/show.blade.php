@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">Asistencia {{$asistencia->nombre}} - {{Carbon\Carbon::parse($asistencia -> fecha)->format('d/m/Y')}}</h3>

                        <div class="col">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered color-table info-table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">NRO</th>
                                        <th class="text-center">APELLIDO PATERNO</th>
                                        <th class="text-center">APELLIDO MATERNO</th>
                                        <th class="text-center">NOMBRE</th>
                                        <th class="w-25 text-center">ESTADO</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($asistencia->detalles as $detalle)
                                        <tr>

                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td class="text-center">{{$detalle->estudiante->apellido_paterno}}</td>
                                            <td class="text-center">{{$detalle->estudiante->apellido_materno}}</td>
                                            <td class="text-center">{{$detalle->estudiante->nombre}}</td>
                                            <td class="text-center"><h4>{{$detalle->estado}}</h4></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    <a href="{{url('asistencia')}}" class="btn btn-warning">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection
