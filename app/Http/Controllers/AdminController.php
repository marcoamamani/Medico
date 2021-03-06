<?php

namespace Citas\Http\Controllers;

use Illuminate\Http\Request;

use Citas\Http\Requests;
use Citas\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Citas\Paciente;
use Citas\Medico;
use Citas\Especialidad;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::user()->nivel==0)
      {
        return view('inicio');
      }
      if(Auth::user()->nivel==1)
      {
        $pacientes= Paciente::get();
        return view('iniciorec')->with('pacientes',$pacientes);
      }
      if(Auth::user()->nivel==2)
      {
        return view('iniciousu');
      }
      if(Auth::user()->nivel==3)
      {
        return view('iniciomed');
      }
    }
    public function calendario()
    {
       return view('calendario');
    }
    public function medicosrec()
    {
      $medicos = Medico::join('usuarios','id_usuario','=','usuarios.id')->join('especialidades','id_especialidad','=','especialidades.id')->get();
      return view ('medicosrec')->with('medicos',$medicos);
    }
    public function citasprog()
    {
      $medicos = Medico::join('usuarios','id_usuario','=','usuarios.id')->join('especialidades','id_especialidad','=','especialidades.id')->get();
      return view ('citasprog')->with('medicos',$medicos);
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
    public function store(Request $request)
    {
        //
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
