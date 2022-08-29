@extends('layouts.app')

@section('titulo', 'Nuestros Estudiantes')

@section('contenido')
    <h2>Nuestros Estudiantes</h2>
    <br>
    <a href="/estudiantes/create" class="btn btn-success">Agregar estudiante</a>
    <div class="row">
        @foreach ($estudiantico as $item)
                <div class="m-3 col-sm">
                    <div class="card" style="width: 18rem; height:250px">
                        <div class="card-body">
                            <h4 class="card-title">{{$item->nombres}} {{$item->primerApellido}} {{$item->segundoApellido}}</h4>
                            <h5 class="card-title">Numero de documento: {{$item->numDoc}}</h5>
                            <h5 class="card-title">Genero: {{$item->genero}}</h5>
                            <a href="/estudiantes/{{$item->id}}" class="btn btn-primary">Ver Detalle</a>
                        </div>
                    </div>
                </div>{{--cierre de col--}}
        @endforeach
    </div>
@endsection
