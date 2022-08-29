<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
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
        return view('estudiantes.create');
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
        if($request->hasFile('docIdent')){
            $estudiantico->docIdent = $request->file('docIdent')->store('public/estudiantes');
        }
        $estudiantico->save();//Con el comando save se registra la info en la db
        return 'Guardado exitosamente';
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
        $estudiantes = Estudiantes::find($id);
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
        $estudiantes= Estudiantes::find($id);
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
