<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class envio_lab extends Model
{
    protected $fillable = [
        'id_item','id_laboratorio','cantidad'
    ];
    protected $primaryKey = 'id_env_lab';
}
