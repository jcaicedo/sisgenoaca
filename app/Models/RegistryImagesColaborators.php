<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistryImagesColaborators extends Model
{
    protected $table = 'registry_image_colaborators';

    protected $fillable = [
      'id_registry',
      'id_image_colaborator'
    ];

    public $timestamps = false;

    public function registry(){
        return $this->belongsTo('App\Models\RegistroOaca','id_registry');
    }

    public function images_colaborators(){
        return $this->belongsTo('App\Models\ImagesColaborators','id_image_colaborator');
    }
}
