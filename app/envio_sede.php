<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class envio_sede extends Model
{
    protected $fillable = [
        'id_sede','id_laboratorio','id_env_sede'
    ];
    protected $primaryKey = 'id_env_sede';

    public function lab()
    {
        return $this->hasOne('App\laboratorio','id_laboratorio');
    }

    public function sede()
    {
        return $this->hasMany('App\sede','id_sede');
    }
}
