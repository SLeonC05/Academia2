@extends('layouts.app')

@section('titulo', 'Añadir Estudiante')

@section('contenido')
    <form action="/estudiantes" method="POST" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
            @foreach ($errors->all() as $alerta)
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <li>{{$alerta}}</li>
                    </ul>
                </div>
            @endforeach
        @endif
        <br>
            <h2>Aquí puedes añadir un nuevo Estudiante</h2>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input id="nombres" class="form-control" type="text" name="nombres">
                </div>
                <div class="form-group">
                    <label for="primerApellido">Primer apellido</label>
                    <input id="primerApellido" class="form-control" type="text" name="primerApellido">
                </div>
                <div class="form-group">
                    <label for="segundoApellido">Segundo apellido</label>
                    <input id="segundoApellido" class="form-control" type="text" name="segundoApellido">
                </div>
                <div class="form-group">
                    <label for="tipoDoc">Tipo de documento</label>
                    <input id="tipoDoc" class="form-control" type="text" name="tipoDoc">
                </div>
                <div class="form-group">
                    <label for="numDoc">Numero de documento</label>
                    <input id="numDoc" class="form-control" type="text" name="numDoc">
                </div>
                <div class="form-group">
                    <label for="docIdent">Subir documento de identidad</label>
                    <br>
                    <input id="docIdent" type="file" name="docIdent" accept="aplication/pdf">
                </div>
            </div>
            <div class="col-6">

                <div class="form-group">
                    <label for="fechaExp">Fecha de expedición del documento</label>
                    <input id="fechaExp" class="form-control" type="date" name="fechaExp">
                </div>

                <div class="form-group">
                    <label for="genero">Genero</label>
                    <input id="genero" class="form-control" type="text" name="genero">
                </div>
                <div class="form-group">
                    <label for="idMuni">Municipio de nacimiento</label>
                    <input id="idMuni" class="form-control" type="text" name="idMuni">
                </div>
                <div class="form-group">
                    <label for="idCurso">Curso</label>
                    <input id="idCurso" class="form-control" type="text" name="idCurso">
                </div>
                <div class="form-group">
                    <label for="estrato">Estrato socioeconomico</label>
                    <input id="estrato" class="form-control" type="text" name="estrato">
                </div>
                <div class="form-group">
                    <label for="idPaisExp">Pais de expedicion</label>
                    <selec name="idPaisExp" id="idPaisExp">
                        @foreach ($paises as $paisExp)
                            <option value="">{{paisExp->nombrePais}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idDepExp">Departamento de expedicion</label>
                    <select name="idDepExp" id="idDepExp">
                        @foreach ($departamentos as $depExp)
                            <option value="">{{depExp->nombreDepa}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idMuniExp">Municipio de expedicion</label>
                    <select name="idMuniExp" id="idMuniExp">
                        @foreach ($municipios as $munExp)
                            <option value="">{{munExp->nombreMunici}} </option>
                        @endforeach
                    </select>
                </div>


            </div>
        </div>
        <br>
            <button class="btn btn-success text-center" type="submit">Añadir Estudiante</button>
        </div>
    </form>
@endsection
