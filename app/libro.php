<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{

    protected $fillable = [
        'titulo', 'descripcion', 'isbn', 'editorial', 'year', 'escritor_id', 'ebook',
    ];

    public function escritor()
    {
        return $this->belongsTo('App\escritor');
    }
}
