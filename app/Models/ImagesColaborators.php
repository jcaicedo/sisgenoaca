<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagesColaborators extends Model
{
    protected $table = 'image_colaborators';

    protected $fillable = [
    'name',
    'path'
    ];

    public $timestamps = false;

    public function registry_image_colaborators(){
        return $this->hasOne('App\Models\RegistryImagesColaborators','id_image_colaborator');
    }
}
