@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">Actividades
                        <div class="float-right">
                            <a class="btn btn-outline-info" href="{{url('actividades/create')}}">
                                <i class="fa fa-plus"></i> Nueva
                            </a>
                        </div>
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>FECHA</th>
                                <th>MATERIA</th>
                                <th>DIMENSION</th>
                                <th class="text-center">OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($actividades as $actividad)
                                <tr>
                                    <td>{{$actividad->nombre}}</td>
                                    <td>{{Carbon\Carbon::createFromTimestamp($actividad->fecha)->format('d/m/Y')}}</td>
                                    <td>{{$actividad->materia->nombre}}</td>
                                    <td>{{$actividad->dimension->nombre}}</td>
                                    <td class="text-center ">
                                        <a href="{{url('actividades/'.$actividad->id.'/edit')}}">
                                            <button class="btn btn-warning">
                                                <i class="fa fa-pen"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-danger" onclick="modalEliminar('{{$actividad->nombre}}', '{{url('actividades/'.$actividad -> id)}}')">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$actividades->links('pagination.default')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('vistas.modal')
    @push('scripts')
        <script>

            function modalEliminar(nombre, url) {
                $('#modalEliminarForm').attr("action", url);
                $('#metodo').val("delete");
                $('#modalEliminarTitulo').html("Eliminar la actividad");
                $('#modalEliminarEnunciado').html("Realmente desea eliminar la actividad: " + nombre + "?");
                $('#modalEliminar').modal('show');
            }

        </script>

    @endpush()
@endsection
