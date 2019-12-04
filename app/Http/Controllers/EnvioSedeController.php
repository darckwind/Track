<?php

namespace App\Http\Controllers;

use App\envio_sede;
use App\laboratorio;
use App\sede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnvioSedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enviado = DB::table('envio_sedes')
            ->join('laboratorios', 'laboratorios.id_laboratorio', '=', 'envio_sedes.id_laboratorio')
            ->join('sedes', 'sedes.id_sede', '=', 'envio_sedes.id_sede')
            ->select('envio_sedes.id_env_sede', 'sedes.nombre_sede','laboratorios.nombre_lab')
            ->get();
        return view('env_sede.index',compact('enviado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lab = laboratorio::all();
        $sede = sede::all();
        return view('env_sede.create',compact('lab','sede'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lab' => 'required',
            'sede' => 'required'
        ]);

        $env_sede = new envio_sede();
        $env_sede->id_sede = $request->input('sede');
        $env_sede->id_laboratorio = $request->input('lab');
        $env_sede->save();

        $envio = envio_sede::all();
        return view('env_sede.index',compact('envio'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\envio_sede  $envio_sede
     * @return \Illuminate\Http\Response
     */
    public function show(envio_sede $envio_sede)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\envio_sede  $envio_sede
     * @return \Illuminate\Http\Response
     */
    public function edit(envio_sede $envio_sede)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\envio_sede  $envio_sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, envio_sede $envio_sede)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\envio_sede  $envio_sede
     * @return \Illuminate\Http\Response
     */
    public function destroy(envio_sede $envio_sede)
    {
        //
    }
}
