@extends('layouts.app')

@section('titulo', 'Nuestros Estudiantes')

@section('contenido')
    <h2>Nuestros Estudiantes</h2>
    <a href="/estudiantes/create" class="btn btn-primary">Agregar estudiante</a>
    <div class="row">
        @foreach ($estudiantico as $item)
                <div class="m-3 col-sm">
                    <div class="card" style="width: 18rem; height:360px">
                        <div class="card-body">
                            <h4 class="card-title">{{$item->nombres}} {{$item->primerApellido}} {{$item->segundoApellido}}</h4>
                            <a href="/estudiantes/{{$item->id}}" class="btn btn-primary">Ver Detalle</a>
                        </div>
                    </div>
                </div>{{--cierre de col--}}
        @endforeach
    </div>
@endsection
