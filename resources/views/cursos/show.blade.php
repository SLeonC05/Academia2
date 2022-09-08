@extends('layouts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')
    <div class="text-">
        <div class="m-auto">
            <h2>Detalle del Curso</h2>
            <img width="300" src="{{Storage::url($cursito->imagen)}}" alt="">
            <p class="card-text"><b>Descripción: </b>{{$cursito->descripcion}}</p>
            <p class="card-text"><b>Duración: </b>{{$cursito->duracion}} horas</p>
            <div>
                <label for="materia"><b>Materias del curso</b></label>
                <select class="form-control text-center" name="materias" id="materias" style="width: 30%">
                    @foreach ($materias as $materia)
                        <option value="">{{$materia->nombreMateria}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-success">Editar</a>
        </div>
        <br>
        {{--Creacion de campo Eliminar en la vista. Por medio del metodo DELETE,
            ademas de la ruta que debe retornar--}}
        <form class="form-group" action="/cursos/{{$cursito->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>

@endsection
