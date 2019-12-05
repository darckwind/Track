<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class envio_centro extends Model
{
    protected $fillable = [
        'id_sede','id_centro'
    ];
    protected $primaryKey = 'id_env_cen';
}
