<?php

namespace App\Http\Controllers;

use App\envio_centro;
use Illuminate\Http\Request;

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
        return view('env_centro.index');
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
    public function edit(envio_centro $envio_centro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\envio_centro  $envio_centro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, envio_centro $envio_centro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\envio_centro  $envio_centro
     * @return \Illuminate\Http\Response
     */
    public function destroy(envio_centro $envio_centro)
    {
        //
    }
}
