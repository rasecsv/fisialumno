<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('alumno.registrar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //
        $alumno = new Alumno();
        $alumno->apPaterno = $request->input('apPaterno');
        $alumno->apMaterno = $request->input('apMaterno');
        $alumno->nombre = $request->input('nombre');
        $alumno->codigo = $request->input('codigo');
        $alumno->dni = $request->input('dni');
        $alumno->ciclo = $request->input('ciclo');
        $alumno->departamento = $request->input('departamento');
        $alumno->provincia = $request->input('provincia');
        $alumno->distrito = $request->input('distrito');
        $alumno->direccion = $request->input('direccion');
        $alumno->escuela = $request->input('escuela');
        $alumno->genero = $request->input('genero');
        $alumno->correo = $request->input('correo');
        $alumno->telefono = $request->input('telefono');
        $alumno->estado = $request->input('estado');
         $alumno->username = $request->input('codigo');
        $alumno->password = $request->input('dni');
       
        
        $alumno->save();

        return redirect()->route('login')->with('status','Se ha registrado con éxito.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
