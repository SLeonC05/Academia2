@extends('layouts.app')

@section('titulo', 'Actualizado')

@section('contenido')
    <div class="text-center">
        <div class="alert alert-success" role="alert">
            Los datos del estudiante han sido actualizados...
        </div>
        <a href="/estudiantes" class="m-5 btn btn-primary">Volver</a>
    </div>
@endsection
