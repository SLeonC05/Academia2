@extends('layouts.app')

@section('titulo', 'Lista Cursos')

@section('contenido')

    <h2>Listado de Cursos</h2>
    <a href="/cursos/create" class="m-3 btn btn-success">Añadir curso nuevo</a>
    <div class="row">
        @foreach ($cursito as $item)
                <div class="col-sm m-3">
                    <div class="card" style="width: 18rem;">
                        <img style="height: 150px " class="card-img-top" src="{{Storage::url($item->imagen)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->nombre}}</h5>
                            {{-- <p class="card-text">Descripción: {{$item->descripcion}}</p>
                            <p class="card-text">Duración: {{$item->duracion}} horas</p> --}}
                            <a href="/cursos/{{$item->id}}" class="btn btn-primary">Ver Detalle</a>
                        </div>
                    </div>
                </div>{{--cierre de col--}}
        @endforeach
    </div>{{--cierre de row--}}
@endsection
