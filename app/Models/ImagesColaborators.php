<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\RegistryImagesColaborators;

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

    public static function deleteImagesArray($array_images=[]){
        $query = self::whereNotIn('id',$array_images)
                    ->delete();
        
    }
}
