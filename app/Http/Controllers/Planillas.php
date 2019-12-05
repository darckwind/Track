<?php

namespace App\Http\Controllers;

use App\envio_lab;
use App\laboratorio;
use App\sede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Planillas extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function laboratorio()
    {
        $lab = DB::table('envio_labs')
            ->join('laboratorios', 'laboratorios.id_laboratorio', '=', 'envio_labs.id_laboratorio')
            ->join('items', 'items.id_item', '=', 'envio_labs.id_item')
            ->select('envio_labs.id_env_lab','envio_labs.cantidad', 'items.description','laboratorios.nombre_lab','envio_labs.id_laboratorio')
            ->get();

        $labora = laboratorio::all();


        return view('etiqueta.etiqueta',compact('lab','labora'));
    }

    public function sede()
    {
        $lab = DB::table('envio_sedes')
            ->join('laboratorios', 'laboratorios.id_laboratorio', '=', 'envio_sedes.id_laboratorio')
            ->join('sedes', 'sedes.id_sede', '=', 'envio_sedes.id_sede')
            ->select('envio_sedes.id_env_sede', 'sedes.nombre_sede','laboratorios.nombre_lab','sedes.id_sede')
            ->get();
        $sede = sede::all();

        return view('etiqueta.sede',compact('lab','sede'));
    }
}
