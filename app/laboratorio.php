<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratorio extends Model
{
    protected $fillable = [
        'id_laboratorio','nombre_lab'
    ];
    protected $primaryKey = 'id_laboratorio';

    public function envio_sede()
    {
        return $this->belongsTo('App\envio_sede');
    }
}
