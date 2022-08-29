@extends('layouts.app')

@section('titulo', 'Editar Estudiante')

@section('contenido')
    <form action="/estudiantes/{{$estudiantico->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <br>
            <h2>Aquí puedes editar la información del estudiante</h2>
            <br>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="tipoDoc">Editar tipo de documento</label>
                        <input id="tipoDoc" class="form-control" type="text" name="tipoDoc" value="{{$estudiantico->tipoDoc}}">
                    </div>
                    <div class="form-group">
                        <label for="numDoc">Editar numero de documento</label>
                        <input id="numDoc" class="form-control" type="number" name="numDoc" value="{{$estudiantico->numDoc}}">
                    </div>
                    <div class="form-group">
                        <label for="fechaExp">Editar Fecha de expedicion</label>
                        <input id="fechaExp" class="form-control" type="date" name="fechaExp" value="{{$estudiantico->primerApellido}}">
                    </div>
                    <div class="form-group">
                        <label for="nombres">Editar nombres del estudiante</label>
                        <input id="nombres" class="form-control" type="text" name="nombres" value="{{$estudiantico->nombres}}">
                    </div>
                    <div class="form-group">
                        <label for="primerApellido">Editar los apellidos del estudiante</label>
                        <input id="primerApellido" class="form-control" type="text" name="primerApellido" value="{{$estudiantico->primerApellido}}">
                    </div>


                    <div class="form-group">
                        <label for="segundoApellido">Editar los apellidos del estudiante</label>
                        <input id="segundoApellido" class="form-control" type="text" name="segundoApellido" value="{{$estudiantico->segundoApellido}}">
                    </div>
                    <div class="form-group">
                        <label for="genero">Editar genero</label>
                        <input id="genero" class="form-control" type="text" name="genero" value="{{$estudiantico->genero}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="estrato">Editar estrato</label>
                        <input id="estrato" class="form-control" type="text" name="estrato" value="{{$estudiantico->estrato}}">
                    </div>
                    <div class="form-group">
                        <label for="docIdent">Editar documento</label>
                        <br>
                        <iframe width="400" height="400" src="{{Storage::url($estudiantico->docIdent)}}"></iframe>
                        <br>
                        <br>
                        <input id="docIdent" type="file" name="docIdent">
                    </div>
                    </div>
            </div>
            <br>
            <button class="btn btn-info" type="submit">Actualizar</button>
        </div>
    </form>
@endsection
