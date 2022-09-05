@extends('layouts.app')

@section('titulo', 'Detalle Estudiante')

@section('contenido')
    <div class="text-">
        <div class="m-auto">
            <h2>Estudiante</h2>
            <br><br>
            <p class="card-text"><b>Nombres: </b>{{$estudiantico->nombres}}</p>
            <p class="card-text"><b>Primer Apellido: </b>{{$estudiantico->primerApellido}}</p>
            <p class="card-text"><b>Segundo Apellido: </b>{{$estudiantico->segundoApellido}}</p>
            <p class="card-text"><b>Tipo de documento: </b>{{$estudiantico->tipoDoc}}</p>
            <p class="card-text"><b>Numero de documento: </b>{{$estudiantico->numDoc}}</p><br>
            <iframe width="400" height="400" src="{{Storage::url($estudiantico->docIdent)}}"></iframe><br><br><br>
            <p class="card-text"><b>Fecha de expedición del documento: </b>{{$estudiantico->fechaExp}}</p>
            <p class="card-text"><b>Genero: </b>{{$estudiantico->genero}}</p>
            <p class="card-text"><b>Municipio de nacimiento: </b>{{$estudiantico->idMuni}}</p>
            <p class="card-text"><b>Curso: </b>{{$estudiantico->idCurso}}</p>
            <p class="card-text"><b>Estrato socioeconomico: </b>{{$estudiantico->estrato}}</p>
        </div>
        <br>
        <a href="/estudiantes/{{$estudiantico->id}}/edit" class="btn btn-success">Editar Estudiante</a>
        <br>
        <br>
        {{--Creacion de campo Eliminar en la vista. Por medio del metodo DELETE,
            ademas de la ruta que debe retornar--}}
        <form class="form-group" action="/estudiantes/{{$estudiantico->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar Estudiante</button>
        </form>


    </div>

@endsection
