@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Editar actividad
                    </h3>
                    <form method="POST" action="{{url('actividades/'.$actividad->id)}}" autocomplete="off">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$actividad->nombre}}"
                                           name="nombre">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input required
                                           type="date"
                                           class="form-control text-center"
                                           value="{{Carbon\Carbon::createFromTimestamp($actividad->fecha)->toDateString()}}"
                                           name="fecha">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Materia</label>
                                    <select class="form-control" name="materia_id">
                                        @foreach($materias as $materia)
                                            @if($actividad->materia_id == $materia->id)
                                                <option selected value="{{$materia->id}}">{{$materia->nombre}}</option>
                                            @else
                                                <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Dimension</label>
                                    <select class="form-control" name="dimension_id" >
                                        @foreach($dimensiones as $dimension)
                                            @if($actividad->dimension_id == $dimension->id)
                                                <option selected value="{{$dimension->id}}">{{$dimension->nombre}}</option>
                                            @else
                                                <option value="{{$dimension->id}}">{{$dimension->nombre}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered color-table info-table">
                                        <thead>
                                        <tr>
                                            <th class="text-center">NRO</th>
                                            <th class="text-center">APELLIDO PATERNO</th>
                                            <th class="text-center">APELLIDO MATERNO</th>
                                            <th class="text-center">NOMBRE</th>
                                            <th class="text-center">PUNTOS</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($estudiantes as $estudiante)
                                            <tr>
                                                <input type="hidden" name="estudiante_id[]" value="{{$estudiante->id}}">
                                                <td class="text-center">{{$loop->iteration}}</td>
                                                <td class="text-center">{{$estudiante->apellido_paterno}}</td>
                                                <td class="text-center">{{$estudiante->apellido_materno}}</td>
                                                <td class="text-center">{{$estudiante->nombre}}</td>
                                                <!– QUE HAGO PARA CUANDO LUEGO DE UNA ACTIVIDAD SE AGREGUE UN NUEVO ESTUDIANTE!!!!?  –>
                                                <td class="text-center">
                                                    <input class="form-control" type="number" min="0" max="100" name="puntos[]" value="{{$actividad->calificaciones[$loop->index]->puntos}}">
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('actividades')}}" class="btn btn-warning">Atras</a>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('arriba')
        <link href="{{asset('plantilla/assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet">
    @endpush
    @push('scripts')
        <script src="{{asset('plantilla/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
    @endpush
@endsection
