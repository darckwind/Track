<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable = [
        'id_item','descripcion'
    ];
    protected $primaryKey = 'id_item';

}
