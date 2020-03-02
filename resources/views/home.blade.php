@extends('layouts.index')

@section('contenido')
    <div class="row">
        <div class="col-12 m-t-30">
            <div class="card-columns">
                <div class="card text-center p-3" >
                    <div class="card-body">
                        <h4 class="card-title">Estudiantes</h4>
                        <p class="card-text"><i class="fa fa-user-graduate fa-3x"></i></p>
                        <a class="btn btn-info btn-block" href="{{url('administrador/estudiantes')}}"> Ver </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
