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
                    <label for="nombres">Edita el Nombre</label>
                    <input id="nombres" class="form-control" type="text" name="nombres" value="{{$estudiantico->nombres}}">
                </div>
                <div class="form-group">
                    <label for="primerApellido">Edita el Primer apellido</label>
                    <input id="primerApellido" class="form-control" type="text" name="primerApellido" value="{{$estudiantico->primerApellido}}">
                </div>
                <div class="form-group">
                    <label for="segundoApellido">Edita el Segundo apellido</label>
                    <input id="segundoApellido" class="form-control" type="text" name="segundoApellido" value="{{$estudiantico->segundoApellido}}">
                </div>
                <div class="form-group">
                    <label for="tipoDoc">Edita el Tipo de documento</label>
                    <select name="tipoDoc" id="tipoDoc" class="form-control" value="{{$estudiantico->tipoDoc}}">
                        <option value="CC">Cedula</option>
                        <option value="TI">Tarjeta de identidad</option>
                        <option value="PAS">Pasaporte</option>
                        <option value="REG">Registro civil</option>
                        <option value="CE">Cedula de extrangeria</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="numDoc">Edita el Numero de documento</label>
                    <input id="numDoc" class="form-control" type="text" name="numDoc" value="{{$estudiantico->numDoc}}">
                </div>
                <div class="form-group">
                    <label for="docIdent">Edita el archivo</label>
                    <br>
                    <input id="docIdent" type="file" name="docIdent" accept="aplication/pdf" value="{{$estudiantico->docIdent}}">
                </div>
                <div class="form-group">
                    <label for="idPaisExp">Edita el Pais de expedicion</label>
                    <select class="form-control" name="idPaisExp" id="idPaisExp" value="{{$estudiantico->idPaisExp}}">
                        @foreach ($paises as $paisExp)
                            <option value="">{{$paisExp->nombrePais}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idDepExp">Edita el Departamento de expedicion</label>
                    <select class="form-control" name="idDepExp" id="idDepExp" value="{{$estudiantico->idDepExp}}">
                        @foreach ($departamentos as $depExp)
                            <option value="">{{$depExp->nombreDepa}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="idMuniExp">Edita el Municipio de expedicion</label>
                    <select class="form-control" name="idMuniExp" id="idMuniExp" value="{{$estudiantico->idMuniExp}}">
                        @foreach ($municipios as $munExp)
                            <option value="{{$munExp->id}}">{{$munExp->nombreMunici}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="fechaExp">Edita la Fecha de expedición del documento</label>
                    <input id="fechaExp" class="form-control" type="date" name="fechaExp" value="{{$estudiantico->fechaExp}}">
                </div>
                <div class="form-group">
                    <label for="genero">Edita el Genero</label>
                    <select name="genero" id="genero" class="form-control" value="{{$estudiantico->genero}}">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="O">Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idPaisNacim">Edita el Pais de nacimiento</label>
                    <select class="form-control" id="idPaisNacim" name="idPaisNacim" value="{{$estudiantico->idPaisNacim}}">
                        @foreach ($paises as $paisNacim)
                            <option value="">{{$paisNacim->nombrePais}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idDepNacim">Edita el Departamento de nacimiento</label>
                    <select class="form-control" id="idDepNacim" name="idDepNacim" value="{{$estudiantico->idDepNacim}}">
                        @foreach ($departamentos as $depNacim)
                            <option value="">{{$depNacim->nombreDepa}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idMuni">Edita el Municipio de nacimiento</label>
                    <select class="form-control" name="idMuni" id="idMuni" value="{{$estudiantico->idMuni}}">
                        @foreach ($municipios as $munNacim)
                            <option value="{{$munNacim->id}}">{{$munNacim->nombreMunici}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idCurso">Edita el Curso</label>
                    <select class="form-control" name="idCurso" id="idCurso" value="{{$estudiantico->idCurso}}">
                        @foreach ($cursito as $curso)
                            <option value="{{$curso->id}}">{{$curso->nombre}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="estrato">Edita el Estrato </label>
                    <input id="estrato" class="form-control" type="number" name="estrato" value="{{$estudiantico->estrato}}">
                </div>
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
                        <label for="docIdent">Editar documento</label>
                        <br>
                        <img width="400" src="{{Storage::url($estudiantico->docIdent)}}" alt="">
                        <br>
                        <br>
                        <input id="docIdent" type="file" name="docIdent">
                    </div>

                    <div class="form-group">
                        <label for="idPaisExp">Pais de expedicion</label>
                        <selec name="idPaisExp" id="idPaisExp">
                            @foreach ($paises as $paisExp)
                                <option value="">{{$paisExp->nombrePais}} </option>
                            @endforeach
                        </selec>
                    </div>
                    <div class="form-group">
                        <label for="idDepExp">Departamento de expedicion</label>
                        <selec name="idDepExp" id="idDepExp">
                            @foreach ($departamentos as $depExp)
                                <option value="">{{$depExp->nombreDepa}} </option>
                            @endforeach
                        </selec>
                    </div>
                    <div class="form-group">
                        <label for="idMuniExp">Municipio de expedicion</label>
                        <selec name="idMuniExp" id="idMuniExp">
                            @foreach ($municipios as $munExp)
                                <option value="">{{$munExp->nombreMunici}} </option>
                            @endforeach
                        </selec>
                    </div>
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
        </div>
        <br>
            <button class="btn btn-success text-center" type="submit">Actualizar</button>
        </div>
    </form>
@endsection
