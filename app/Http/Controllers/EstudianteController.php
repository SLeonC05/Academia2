<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeEstudianteRequest;
use App\Models\Curso;
use App\Models\Departamento;
use App\Models\Estudiante;
use App\Models\Municipio;
use App\Models\Pais;
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
        $estudiantico = Estudiante::all();
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
        $cursito = Curso::all();
        return view('estudiantes.create', compact('paises','departamentos', 'municipios', 'cursito'));
        // return $paises;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeEstudianteRequest $request)
    {
        $estudiantico = new Estudiante();//Lo que hicimos fue crear una instancia de la clase Curso
    //Se devuelve la peticion hecha al servidor
        //return $request->all();
        $estudiantico->tipoDoc = $request->input('tipoDoc');
        $estudiantico->numDoc = $request->input('numDoc');
        $estudiantico->idMuniExp = $request->input('idMuniExp');
        $estudiantico->fechaExp = $request->input('fechaExp');
        $estudiantico->nombres = $request->input('nombres');
        $estudiantico->primerApellido = $request->input('primerApellido');
        $estudiantico->segundoApellido = $request->input('segundoApellido');
        $estudiantico->genero = $request->input('genero');
        $estudiantico->estrato = $request->input('estrato');
        $estudiantico->idMuniExp = $request->input('idMuniExp');
        $estudiantico->idCurso = $request->input('idCurso');
        $estudiantico->idMuni = $request->input('idMuni');
        if($request->hasFile('docIdent')){
            $estudiantico->docIdent = $request->file('docIdent')->store('public/estudiantes');
        }
        $estudiantico->save();//Con el comando save se registra la info en la db
        return view('estudiantes.add');
        //return $request;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiantico = Estudiante::find($id);
        $query1 = Municipio::join(
            'estudiantes', 'estudiantes.idMuniExp', 'municipios.id'
        )
        ->join('departamentos', 'departamentos.id', 'municipios.idDep')
        ->join('pais', 'pais.id', 'departamentos.idPais')
        ->where('estudiantes.id', $id)
        ->select('municipios.nombreMunici as nombreMuni', 'departamentos.nombreDepa as nombreDepart', 'pais.nombrePais as nomPais')
        ->get();

        $query2 = Municipio::join(
            'estudiantes', 'estudiantes.idMuni', 'municipios.id'
        )
        ->join('departamentos', 'departamentos.id', 'municipios.idDep')
        ->join('pais', 'pais.id', 'departamentos.idPais')
        ->where('estudiantes.id', $id)
        ->select('municipios.nombreMunici as nombreMuni', 'departamentos.nombreDepa as nombreDepart', 'pais.nombrePais as nomPais')
        ->get();

        return view('estudiantes.show', compact('estudiantico', 'query1', 'query2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiantico= Estudiante::find($id);
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $cursito = Curso::all();
        return view('estudiantes.edit', compact('estudiantico', 'paises', 'departamentos', 'municipios', 'cursito'));
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
        $estudiantico = Estudiante::find($id);
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $cursito = Curso::all();
        $estudiantico->fill($request->except('docIdent'));
        if($request->hasFile('docIdent')){
            $estudiantico->docIdent = $request->file('docIdent')->store('public/estudiantes');
        }
        $estudiantico->save();
        return view('estudiantes.upload', compact('estudiantico', 'paises', 'departamentos', 'municipios', 'cursito'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiantico = Estudiante::find($id);
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $cursito = Curso::all();
        $urldocIdentBD = $estudiantico->docIdent;
        $nombreImagen = str_replace('public/', '\storage\\', $urldocIdentBD);
        $rutaCompleta = public_path().$nombreImagen;
        unlink($rutaCompleta);
        $estudiantico -> delete();
        return view('estudiantes.delete', compact('estudiantico', 'paises', 'departamentos', 'municipios', 'cursito'));
    }
}
