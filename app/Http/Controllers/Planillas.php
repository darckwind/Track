<?php

namespace App\Http\Controllers;

use App\laboratorio;
use Illuminate\Http\Request;

class Planillas extends Controller
{
    public function laboratorio()
    {
        $lab = laboratorio::all();
        return view('etiqueta.etiqueta',compact('lab'));
    }
}
