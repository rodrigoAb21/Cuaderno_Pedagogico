@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">Trimestres
                        <div class="float-right">
                            <a class="btn btn-outline-info" href="{{url('trimestres/create')}}">
                                <i class="fa fa-plus"></i> Nuevo
                            </a>
                        </div>
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>INICIO</th>
                                <th>FIN</th>
                                <th>OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trimestres as $trimestre)
                                <tr>
                                    <td>{{$trimestre->nombre}}</td>
                                    <td class="text-center">{{Carbon\Carbon::parse($trimestre->fin)->format('d/m/Y')}}</td>
                                    <td class="text-center">{{Carbon\Carbon::parse($trimestre->fin)->format('d/m/Y')}}</td>
                                    <td class="text-right ">
                                        <a href="{{url('trimestres/'.$trimestre->id.'/edit')}}">
                                            <button class="btn btn-warning">
                                                <i class="fa fa-pen"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-danger" onclick="modalEliminar('{{$trimestre -> nombre}}', '{{url('trimestres/'.$trimestre -> id)}}')">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$trimestres->links('pagination.default')}}
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
                $('#modalEliminarTitulo').html("Eliminar trimestre");
                $('#modalEliminarEnunciado').html("Realmente desea eliminar al trimestre: " + nombre + "?");
                $('#modalEliminar').modal('show');
            }

        </script>

    @endpush()
@endsection
