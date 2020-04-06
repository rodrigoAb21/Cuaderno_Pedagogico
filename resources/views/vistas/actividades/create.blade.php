@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Nueva actividad
                    </h3>

                    <form method="POST" action="{{url('actividades')}}" autocomplete="off">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{old('nombre')}}"
                                           name="nombre">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input required
                                           type="date"
                                           class="form-control text-center"
                                           value="{{\Carbon\Carbon::now('America/La_Paz')->toDateString()}}"
                                           name="fecha">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Materia</label>
                                    <select class="form-control" name="materia_id">
                                        @foreach($materias as $materia)
                                            <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Dimension</label>
                                    <select class="form-control" name="dimension_id" >
                                        @foreach($dimensiones as $dimension)
                                            <option value="{{$dimension->id}}">{{$dimension->nombre}}</option>
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
                                                <td class="text-center">
                                                    <input class="form-control" type="number" min="0" max="100" name="puntos[]" value="0">
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
