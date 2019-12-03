<?php

namespace App\Http\Controllers;

use App\envio_lab;
use App\item;
use App\laboratorio;
use App\sede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnvioLabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $enviado = DB::table('envio_labs')
            ->join('laboratorios', 'laboratorios.id_laboratorio', '=', 'envio_labs.id_laboratorio')
            ->join('items', 'items.id_item', '=', 'envio_labs.id_item')
            ->select('envio_labs.id_env_lab','envio_labs.cantidad', 'items.description','laboratorios.nombre_lab')
            ->get();

        return view('env_lab.index',compact('enviado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lab = laboratorio::all();
        $item = item::all();

        return view('env_lab.create',compact('item','lab'));
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
            'item' => 'required',
            'cantidad' => 'required'
        ]);

        $envio =  new envio_lab();
        $envio->id_item = $request->input('item');
        $envio->id_laboratorio = $request->input('lab');
        $envio->cantidad = $request->input('cantidad');
        $envio->save();


        $lab = laboratorio::all();
        $item = item::all();
        return view('env_lab.create',compact('item','lab'));
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
        $envio = envio_lab::find($envio_lab);
        die($envio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\envio_lab  $envio_lab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $envio_lab)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\envio_lab  $envio_lab
     * @return \Illuminate\Http\Response
     */
    public function destroy($envio_lab)
    {
        $delete = envio_lab::find($envio_lab);
        $delete->delete();

        $enviado = DB::table('envio_labs')
            ->join('laboratorios', 'laboratorios.id_laboratorio', '=', 'envio_labs.id_laboratorio')
            ->join('items', 'items.id_item', '=', 'envio_labs.id_item')
            ->select('envio_labs.id_env_lab','envio_labs.cantidad', 'items.description','laboratorios.nombre_lab')
            ->get();

        return view('env_lab.index',compact('enviado'));
    }
}
