<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratorio extends Model
{
    protected $fillable = [
        'id_lab','direccion','nombre_lab'
    ];
    protected $primaryKey = 'id_lab';
}
