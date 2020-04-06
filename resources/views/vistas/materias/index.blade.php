@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">Materias
                        <div class="float-right">
                            <a class="btn btn-outline-info" href="{{url('materias/create')}}">
                                <i class="fa fa-plus"></i> Nueva
                            </a>
                        </div>
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th class="text-right ">OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($materias as $materia)
                                <tr>
                                    <td>{{$materia->nombre}}</td>
                                  <td class="text-right ">
                                        <a href="{{url('materias/'.$materia->id.'/edit')}}">
                                            <button class="btn btn-warning">
                                                <i class="fa fa-pen"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-danger" onclick="modalEliminar('{{$materia -> nombre}}', '{{url('materias/'.$materia -> id)}}')">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$materias->links('pagination.default')}}
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
                $('#modalEliminarTitulo').html("Eliminar materia");
                $('#modalEliminarEnunciado').html("Realmente desea eliminar al materia: " + nombre + "?");
                $('#modalEliminar').modal('show');
            }

        </script>

    @endpush()
@endsection
