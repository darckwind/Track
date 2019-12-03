<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sede extends Model
{
    protected $fillable = [
        'id_sede','nombre_sede','id_user','direccion_sede'
    ];
    protected $primaryKey = 'id_sede';

    public function envio_sede()
    {
        return $this->belongsTo('App\envio_sede');
    }
}
