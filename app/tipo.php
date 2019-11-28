<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    protected $fillable = [
        'id_tipo','des_tipo'
    ];
    public function user()
    {
        return $this->hasOne('App\User','id_tipo');
    }
}
