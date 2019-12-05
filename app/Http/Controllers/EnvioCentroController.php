<?php

namespace App\Http\Controllers;

use App\centro;
use App\envio_centro;
use App\sede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnvioCentroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $enviado = DB::table('envio_centros')
            ->join('centros', 'centros.id_centro', '=', 'envio_centros.id_centro')
            ->join('sedes', 'sedes.id_sede', '=', 'envio_centros.id_sede')
            ->select('envio_centros.id_env_cen', 'sedes.nombre_sede','centros.nombre_centro')
            ->get();

        return view('env_centro.index',compact('enviado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sede = sede::all();
        $centro = centro::all();
        return view('env_centro.create',compact('centro','sede'));
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
            'centro' => 'required',
            'sede' => 'required'
        ]);

        $env_centro = new envio_centro();
        $env_centro->id_centro = $request->input('centro');
        $env_centro->id_sede = $request->input('sede');
        $env_centro->save();

        return redirect()->route('envceo.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\envio_centro  $envio_centro
     * @return \Illuminate\Http\Response
     */
    public function show(envio_centro $envio_centro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\envio_centro  $envio_centro
     * @return \Illuminate\Http\Response
     */
    public function edit($envio_centro)
    {
        $edit = envio_centro::find($envio_centro);
        $sede = sede::all();
        $centro = centro::all();

        return view('env_centro.edit',compact('edit','sede'))->with(compact('centro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\envio_centro  $envio_centro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $envio_centro)
    {
        $request->validate([
            'centro' => 'required',
            'sede' => 'required'
        ]);

        $env_centros = envio_centro::find($envio_centro);
        $env_centros->id_centro = $request->input('centro');
        $env_centros->id_sede = $request->input('sede');
        $env_centros->save();

        return redirect()->route('envceo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\envio_centro  $envio_centro
     * @return \Illuminate\Http\Response
     */
    public function destroy(envio_centro $envio_centro)
    {
        $envio_centro->delete();

        return redirect()->route('envceo.index');
    }
}
