<?php

namespace App\Http\Controllers;

use App\laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lab = laboratorio::all();
        return view('lab.index',compact('lab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lab.create');
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
            'nombre_lab' => 'required'
        ]);

        $lab = new laboratorio();
        $lab->nombre_lab = $request->input('nombre_lab');
        $lab->save();

        return redirect()->route('lab.create')->with('success','Laboratorio Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(laboratorio $laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit($laboratorio)
    {
        $lab = laboratorio::find($laboratorio);
        return view('lab.edit',compact('lab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $laboratorio)
    {
        $request->validate([
            'nombre_lab' => 'required'
        ]);


        $lab = laboratorio::find($laboratorio);
        $lab->nombre_lab = $request->input('nombre_lab');
        $lab->save();

        return redirect()->route('lab.index')
            ->with('success','Laboratorio actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy($laboratorio)
    {
        $lab = laboratorio::find($laboratorio);
        $lab->delete();
        return redirect()->route('lab.index')
            ->with('success','Laboratorio eliminado');
    }
}
