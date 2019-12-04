<?php

namespace App\Http\Controllers;

use App\centro;
use App\estado;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centro = DB::table('centros')
            ->join('users', 'users.id', '=', 'centros.id_users')
            ->join('estados', 'estados.id_estado', '=', 'centros.id_estado')
            ->select('centros.id_centro', 'centros.nombre_centro','centros.direccion_centro','centros.region_centro','centros.comuna_centro','users.name','estados.descripcion')
            ->get();
        return view('centro.index', compact('centro'));
        //return redirect()->route('envsede.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado = estado::all();
        $user = User::all()->where('id_tipo','=',2);
        return view('centro.create',compact('user','estado'));
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
            'nombre_centro' => 'required',
            'region_centro' => 'required',
            'comuna_centro' => 'required',
            'direccion_centro' => 'required',
            'encargado' => 'required',
            'estado' => 'required'
        ]);

        $centro =  new centro();
        $centro->nombre_centro = $request->input('nombre_centro');
        $centro->region_centro = $request->input('region_centro');
        $centro->comuna_centro = $request->input('comuna_centro');
        $centro->direccion_centro = $request->input('direccion_centro');
        $centro->id_users = $request->input('encargado');
        $centro->id_estado = $request->input('estado');
        $centro->save();

        return redirect()->route('centro.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function show(centro $centro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function edit(centro $centro)
    {

        $estado = estado::all();
        $user = User::all()->where('id_tipo','=',2);
        return view('centro.edit',compact('user','estado'))->with(compact('centro'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, centro $centro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function destroy(centro $centro)
    {
        $centro->delete();
        return redirect()->route('centro.index');
    }
}
