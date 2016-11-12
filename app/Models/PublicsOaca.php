<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicsOaca extends Model
{
    protected $table = 'publics_oaca';

    protected $fillable = [
      'register_id',
      'status'
    ];

    public $timestamps = false;

    /*
    *Si es public 1 sino es no public 0
    */

    public function oaca(){
      return $this->hasOne('App\Models\RegistroOaca','id');
    }

    public static function isPublic($id_registry){
      $query = self::where('register_id','=',$id_registry)->get();
      return $query->status==1?true:false;
    }
}
