<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroOaca extends Model
{
    protected  $table = 'registros';

    protected $fillable = [

        'nombreoaca',
        'areaconocimiento',
        'subareaconocimiento',
        'idioma',
        'origen',
        'objetivogeneral',
        'objetivoespecifico',
        'contexto',
        'audiencia'
    ];
}
