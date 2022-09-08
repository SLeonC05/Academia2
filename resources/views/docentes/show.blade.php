@extends('layouts.app')

@section('titulo', 'Detalle Docente')

@section('contenido')
    <div class="text-">
        <div class="m-auto">
            <h2>Detalle del Docente</h2>
            <div class="row">
                <div class="col-6">
                    <p class="card-text"><b>Nombres:</b> {{$docentico->nombres}}</p>
                    <p class="card-text"><b>Apellidos:</b> {{$docentico->apellidos}}</p>
                    <p class="card-text"><b>Titulo Universitario:</b> {{$docentico->titulo}}</p>
                    <p class="card-text"><b>Edad:</b> {{$docentico->edad}}</p>
                    <p class="card-text"><b>Fecha de contratación:</b> {{$docentico->fecha}}</p>
                    <p><b>Imagen:</b></p>
                    <img width="400" src="{{Storage::url($docentico->imagen)}}" alt="">
                </div>
                <div class="col-6">
                    <p><b>Documento:</b></p>
                    <iframe width="400" height="400" src="{{Storage::url($docentico->documento)}}"></iframe>
                </div>
            </div>
        </div>
        <br>
        <a href="/docentes/{{$docentico->id}}/edit" class="btn btn-success">Editar Docente</a>
        <br>
        <br>
        {{--Creacion de campo Eliminar en la vista. Por medio del metodo DELETE,
            ademas de la ruta que debe retornar--}}
        <form class="form-group" action="/docentes/{{$docentico->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar Docente</button>
        </form>


    </div>

@endsection
