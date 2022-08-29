@extends('layouts.app')

@section('titulo', 'Detalle Estudiante')

@section('contenido')
    <div class="text-">
        <div class="m-auto">
            <h2>Estudiante</h2>
            <p class="card-text">Nombres: {{$estudiantico->nombres}}</p>
            <p class="card-text">Primer Apellido: {{$estudiantico->primerApellido}}</p>
            <p class="card-text">Segundo Apellido: {{$estudiantico->segundoApellido}}</p>
            <p class="card-text">Tipo de documento: {{$estudiantico->tipoDoc}}</p>
            <p class="card-text">Numero de documento: {{$estudiantico->numDoc}}</p>
            <iframe width="400" height="400" src="{{Storage::url($estudiantico->docIdent)}}"></iframe>
            <p class="card-text">Fecha de expedición del documento: {{$estudiantico->fechaExp}}</p>
            <p class="card-text">Genero: {{$estudiantico->genero}}</p>
            <p class="card-text">Municipio de nacimiento: {{$estudiantico->idmunNacimi}}</p>
            <p class="card-text">Curso: {{$estudiantico->idCurso}}</p>
            <p class="card-text">Estrato socioeconomico: {{$estudiantico->estrato}}</p>
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
            <button type="submit" class="btn btn-danger">Eliminar Docente</button>
        </form>


    </div>

@endsection
