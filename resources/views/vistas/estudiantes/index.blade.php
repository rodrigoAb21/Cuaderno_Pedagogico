@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">Estudiantes
                        <div class="float-right">
                            <a class="btn btn-outline-info" href="{{url('estudiantes/create')}}">
                                <i class="fa fa-plus"></i> Nuevo
                            </a>
                        </div>
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>

                                <th>APELLIDO PATERNO</th>
                                <th>APELLIDO MATERNO</th>
                                <th>NOMBRE</th>
                                <th>OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($estudiantes as $estudiante)
                                <tr>
                                    <td>{{$estudiante -> apellido_paterno}}</td>
                                    <td>{{$estudiante -> apellido_materno}}</td>
                                    <td>{{$estudiante -> nombre}}</td>
                                    <td class="text-right ">
                                        <a href="{{url('estudiantes/'.$estudiante->id.'/edit')}}">
                                            <button class="btn btn-warning">
                                                <i class="fa fa-pen"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-danger" onclick="modalEliminar('{{$estudiante -> nombre}}', '{{url('estudiantes/'.$estudiante -> id)}}')">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$estudiantes->links('pagination.default')}}
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
                $('#modalEliminarTitulo').html("Eliminar estudiante");
                $('#modalEliminarEnunciado').html("Realmente desea eliminar al estudiante: " + nombre + "?");
                $('#modalEliminar').modal('show');
            }

        </script>

    @endpush()
@endsection
