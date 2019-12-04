<?php

namespace App\Http\Controllers;

use App\centro;
use App\estado;
use App\User;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('centro.index');
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
        //id_centro,nombre_centro,direccion_centro,region_centro,comuna_centro,id_users,id_estado

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
        //
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
        //
    }
}
