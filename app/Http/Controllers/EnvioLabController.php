<?php

namespace App\Http\Controllers;

use App\envio_lab;
use App\item;
use App\laboratorio;
use App\sede;
use Illuminate\Http\Request;

class EnvioLabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('env_lab.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sede = sede::all();
        $lab = laboratorio::all();
        $item = item::all();

        return view('env_lab.create',compact('sede','lab'))->with(compact('item'));
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
     * @param  \App\envio_lab  $envio_lab
     * @return \Illuminate\Http\Response
     */
    public function show(envio_lab $envio_lab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\envio_lab  $envio_lab
     * @return \Illuminate\Http\Response
     */
    public function edit(envio_lab $envio_lab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\envio_lab  $envio_lab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, envio_lab $envio_lab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\envio_lab  $envio_lab
     * @return \Illuminate\Http\Response
     */
    public function destroy(envio_lab $envio_lab)
    {
        //
    }
}
