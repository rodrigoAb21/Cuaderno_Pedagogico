@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Nuevo dimension
                    </h3>

                    <form method="POST" action="{{url('dimensiones')}}" autocomplete="off">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{old('nombre')}}"
                                           name="nombre">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Factor</label>
                                    <input required
                                           type="number"
                                           step="0.01"
                                           class="form-control"
                                           value="{{old('factor')}}"
                                           name="factor">
                                </div>
                            </div>

                            
                        </div>
                        <a href="{{url('dimensiones')}}" class="btn btn-warning">Atras</a>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
