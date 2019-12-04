<?php

namespace App\Http\Controllers;

use App\envio_lab;
use App\laboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Planillas extends Controller
{
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
}
