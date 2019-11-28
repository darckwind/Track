<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    protected $fillable = [
        'id_estado','descripcion'
    ];
    protected $primaryKey = 'id_estado';
}
