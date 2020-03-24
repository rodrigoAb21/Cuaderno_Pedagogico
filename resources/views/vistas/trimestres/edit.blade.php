@extends('layouts.index')
@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Editar trimestre
                    </h3>

                    <form method="POST" action="{{url('trimestres/'.$trimestre->id)}}" autocomplete="off">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$trimestre->nombre}}"
                                           name="nombre">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Inicio</label>
                                    <input required
                                           type="date"
                                           class="form-control"
                                           value="{{$trimestre->inicio}}"
                                           name="inicio">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Fin</label>
                                    <input required
                                           type="date"
                                           class="form-control"
                                           value="{{$trimestre->fin}}"
                                           name="fin">
                                </div>
                            </div>
                        </div>
                        <a href="{{url('trimestres')}}" class="btn btn-warning">Atras</a>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
