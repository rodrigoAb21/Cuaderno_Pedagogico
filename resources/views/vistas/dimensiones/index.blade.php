@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">Dimensiones
                        <div class="float-right">
                            <a class="btn btn-outline-info" href="{{url('dimensiones/create')}}">
                                <i class="fa fa-plus"></i> Nueva
                            </a>
                        </div>
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>FACTOR</th>
                                <th class="text-right ">OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dimensiones as $dimension)
                                <tr>
                                    <td>{{$dimension->nombre}}</td>
                                    <td>{{$dimension->factor}}</td>
                                  <td class="text-right ">
                                        <a href="{{url('dimensiones/'.$dimension->id.'/edit')}}">
                                            <button class="btn btn-warning">
                                                <i class="fa fa-pen"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-danger" onclick="modalEliminar('{{$dimension -> nombre}}', '{{url('dimensiones/'.$dimension -> id)}}')">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$dimensiones->links('pagination.default')}}
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
                $('#modalEliminarTitulo').html("Eliminar dimension");
                $('#modalEliminarEnunciado').html("Realmente desea eliminar al dimension: " + nombre + "?");
                $('#modalEliminar').modal('show');
            }

        </script>

    @endpush()
@endsection
