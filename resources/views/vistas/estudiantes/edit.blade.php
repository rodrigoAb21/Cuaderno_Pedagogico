@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Editar estudiante
                    </h3>

                    <form method="POST" action="{{url('estudiantes/'.$estudiante->id)}}" autocomplete="off">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Apellido Paterno</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$estudiante->apellido_paterno}}"
                                           name="apellido_paterno">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Apellido Materno</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$estudiante->apellido_materno}}"
                                           name="apellido_materno">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$estudiante->nombre}}"
                                           name="nombre">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>C.I.</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$estudiante->ci}}"
                                           name="ci">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>RUDE</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$estudiante->rude}}"
                                           name="rude">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>F. Nacimiento</label>
                                    <input required
                                           type="date"
                                           class="form-control"
                                           value="{{Carbon\Carbon::createFromTimestamp($estudiante->fnac)->toDateString()}}"
                                           name="fnac">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Edad</label>
                                    <input required
                                           type="number"
                                           min="1"
                                           class="form-control"
                                           value="{{$estudiante->edad}}"
                                           name="edad">
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Tutor</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$estudiante->tutor}}"
                                           name="tutor">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$estudiante->telefono}}"
                                           name="telefono">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Direccion</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$estudiante->direccion}}"
                                           name="direccion">
                                </div>
                            </div>

                        </div>
                        <a href="{{url('estudiantes')}}" class="btn btn-warning">Atras</a>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
