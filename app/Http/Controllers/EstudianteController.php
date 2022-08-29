<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Departamentos;
use App\Models\Estudiantes;
use App\Models\Municipio;
use App\Models\Pais;
use App\Models\Paises;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantico = Estudiantes::all();
        return view('estudiantes.index', compact('estudiantico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        return view('estudiantes.create', compact('paises','departamentos', 'municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiantico = new Estudiantes();//Lo que hicimos fue crear una instancia de la clase Curso
        //Se devuelve la peticion hecha al servidor
        //return $request->all();
        $estudiantico->tipoDoc = $request->input('tipoDoc');
        $estudiantico->numDoc = $request->input('numDoc');
        $estudiantico->fechaExp = $request->input('fechaExp');
        $estudiantico->nombres = $request->input('nombres');
        $estudiantico->primerApellido = $request->input('primerApellido');
        $estudiantico->segundoApellido = $request->input('segundoApellido');
        $estudiantico->genero = $request->input('genero');
        $estudiantico->estrato = $request->input('estrato');
        $estudiantico->idMuni = $request->input('idMuni');
        $estudiantico->idCurso = $request->input('idCurso');
        if($request->hasFile('docIdent')){
            $estudiantico->docIdent = $request->file('docIdent')->store('public/estudiantes');
        }
        $estudiantico->save();//Con el comando save se registra la info en la db
        return view('estudiantes.add');
        //return $request->input('nombre');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiantico = Estudiantes::find($id);
        return view('estudiantes.show', compact('estudiantico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiantico= Estudiantes::find($id);
        return view('estudiantes.edit', compact('estudiantico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiantico = Estudiantes::find($id);
        $estudiantico->fill($request->except('docIdent'));
        if($request->hasFile('docIdent')){
            $estudiantico->docIdent = $request->file('docIdent')->store('public/estudiantes');
        }
        $estudiantico->save();
        return view('estudiantes.upload');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiantico = Estudiantes::find($id);
        $urldocIdentBD = $estudiantico->docIdent;
        $nombreImagen = str_replace('public/', '\storage\\', $urldocIdentBD);
        $rutaCompleta = public_path().$nombreImagen;
        unlink($rutaCompleta);
        $estudiantico -> delete();
        return view('estudiantes.delete');
    }
}
