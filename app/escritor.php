<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class escritor extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'fecha_nacimiento', 'nacionalidad', 'biografia',
    ];

    public function libro()
    {
        return $this->hasMany('App\libro');
    }
}
