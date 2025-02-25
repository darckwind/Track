<?php

namespace App\Http\Controllers;

use App\estado;
use App\sede;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SedeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('sede');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sede = DB::table('sedes')
            ->join('users', 'users.id', '=', 'sedes.id_users')
            ->join('estados', 'estados.id_estado', '=', 'sedes.id_estado')
            ->select('sedes.id_sede','sedes.id_users', 'sedes.nombre_sede','sedes.direccion_sede','users.name','estados.descripcion')
            ->get();
        return view('sede.index',compact('sede'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado = estado::all();
        $user = User::all()->where('id_tipo','=',1);
        return view('sede.create',compact('user','estado'));
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
            'nombre_sede' => 'required',
            'encargado' => 'required',
            'direccion_sede' => 'required',
            'estado' => 'required'
        ]);
        $sede = new sede();
        $sede->nombre_sede = $request->input('nombre_sede');
        $sede->direccion_sede = $request->input('direccion_sede');
        $sede->id_users = $request->input('encargado');
        $sede->id_estado = $request->input('estado');
        $sede->save();

        return redirect()->route('sede.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show(sede $sede)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit(sede $sede)
    {
        //die($sede);
        $estado = estado::all();
        $user = User::all()->where('id_tipo','=',1);
        return view('sede.edit',compact('user','sede'))->with(compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sede $sede)
    {
        $sedes=$sede;
        $sedes->nombre_sede = $request->input('nombre_sede');
        $sedes->direccion_sede = $request->input('direccion_sede');
        $sedes->id_users = $request->input('encargado');
        $sedes->id_estado = $request->input('estado');
        $sedes->save();

        return redirect()->route('sede.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy(sede $sede)
    {
        $sede->delete();

        return redirect()->route('sede.index');

    }
}
