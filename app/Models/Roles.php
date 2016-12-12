<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
  protected $table = 'roles_users';

  protected $fillable = [
    'nombre'
  ];


  public function users()
  {
    return $this->belongsToMany('App\Models\User');
  }

  public static function getNameRole($id){
    $query = self::find($id);
    return $query->name;
  }
}
