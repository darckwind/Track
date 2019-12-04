<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class centro extends Model
{
    protected $fillable = [
        'id_centro','nombre_centro','direccion_centro','region_centro','comuna_centro','id_users','id_estado'
    ];
    protected $primaryKey = 'id_centro';


}
