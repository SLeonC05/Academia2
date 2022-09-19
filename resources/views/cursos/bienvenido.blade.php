@extends('layouts.app')

@section('titulo', 'Bienvenido')

@section('contenido')

    {{-- <div class="hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md bg-white ring-black ring-black ring-opacity-5 focus:outline-none">
        <div class="py-1" role= "none">
            <a href="locale/en" class="text-gray-700 blck px-4 text-sm hover_bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1">Ingles</a>
            <a href="locale/es" class="text-gray-700 blck px-4 text-sm hover_bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1">Español</a>
        </div>
    </div> --}}
    <h1><p>@lang('mensaje.title')</p></h1>

    <h3><p>@lang('mensaje.content')</p></h3>


@endsection
