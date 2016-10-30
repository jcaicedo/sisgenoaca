<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colaborators extends Model
{
    protected $table = 'colaborators';

    protected $fillable = [
      'id_registry',
      'name',
      'lastname',
      'email',
      'organization',
      'typecontribution',
      'image_organization'
    ];
    public $timestamps = false;

    public function registry(){
      return $this->belongsTo('App\Models\RegistroOaca','id_registry');
    }

}
