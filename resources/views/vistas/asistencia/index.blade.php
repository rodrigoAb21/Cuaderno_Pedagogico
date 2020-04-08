@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">Asistencia
                        <div class="float-right">
                            <a class="btn btn-outline-info" href="{{url('asistencia/create')}}">
                                <i class="fa fa-plus"></i> Nueva
                            </a>
                        </div>
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th class="w-50">DIA</th>
                                <th>FECHA</th>
                                <th class="text-center">OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($asistencias as $asistencia)
                                <tr>
                                    <td>{{$asistencia -> nombre}}</td>
                                    <td>{{Carbon\Carbon::createFromTimestamp($asistencia->fecha)->format('d/m/Y')}}</td>
                                    <td class="text-center ">
                                        <a href="{{url('asistencia/'.$asistencia->id)}}">
                                            <button class="btn btn-outline-info">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>
                                        <a href="{{url('asistencia/reporte/descargar/'.$asistencia->id.'/asistencia-'.Carbon\Carbon::createFromTimestamp($asistencia->fecha)->format('d-m-Y'))}}">
                                            <button class="btn btn-outline-warning">
                                                <i class="fa fa-file-download"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-danger" onclick="modalEliminar('{{Carbon\Carbon::createFromTimestamp($asistencia->fecha)->format('d/m/Y')}}', '{{url('asistencia/'.$asistencia -> id)}}')">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$asistencias->links('pagination.default')}}
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
                $('#modalEliminarTitulo').html("Eliminar la asistencia");
                $('#modalEliminarEnunciado').html("Realmente desea eliminar la asistencia: " + nombre + "?");
                $('#modalEliminar').modal('show');
            }

        </script>

    @endpush()
@endsection
