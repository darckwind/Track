<?php

namespace App\Http\Controllers;

use App\sede;
use App\User;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sede.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all()->where('id_tipo','=',1);
        return view('sede.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy(sede $sede)
    {
        //
    }
}
