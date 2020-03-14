@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Nueva asistencia
                    </h3>

                    <form method="POST" action="{{url('asistencia')}}" autocomplete="off">
                        {{csrf_field()}}
                        <div class="row">
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
                            <div class="col-12">
                                <h5 class="text-right">Presente→<b>P</b> | Ausente→<b>A</b> | Licencia→<b>L</b> | Retraso→<b>R</b></h5>
                            </div>



                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered color-table info-table">
                                        <thead>
                                        <tr>
                                            <th>NRO</th>
                                            <th>APELLIDO PATERNO</th>
                                            <th>APELLIDO MATERNO</th>
                                            <th>NOMBRE</th>
                                            <th class="w-25">ESTADO</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($estudiantes as $estudiante)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$estudiante -> apellido_paterno}}</td>
                                                <td>{{$estudiante -> apellido_materno}}</td>
                                                <td>{{$estudiante -> nombre}}</td>
                                                <td class="text-center">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions{{$loop->iteration}}" id="inlineRadio1{{$loop->iteration}}" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1{{$loop->iteration}}">P</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions{{$loop->iteration}}" id="inlineRadio2{{$loop->iteration}}" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2{{$loop->iteration}}">A</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions{{$loop->iteration}}" id="inlineRadio3{{$loop->iteration}}" value="option3">
                                                        <label class="form-check-label" for="inlineRadio3{{$loop->iteration}}">L</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions{{$loop->iteration}}" id="inlineRadio4{{$loop->iteration}}" value="option4">
                                                        <label class="form-check-label" for="inlineRadio4{{$loop->iteration}}">R</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('asistencia')}}" class="btn btn-warning">Atras</a>
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
