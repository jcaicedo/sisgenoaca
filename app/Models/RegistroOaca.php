<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class RegistroOaca extends Model
{

	const REGISTROID = "26de1390-eb77-3ec7-8cc4-bc46578794e4";
	const USERIDPRUEBA = "27";
	protected $table = 'registrooaca';
	protected $primaryKey = 'id';
	public $incrementing = false;

	protected $fillable = [
	'content_register',
	'title_oaca',
	'user_id',
	'plantilla',
	'licencia'
	];

	protected static function boot()
	{
		parent::boot();
		self::creating(function ($registro) {
				$uuid = Uuid::uuid3(Uuid::NAMESPACE_DNS, $registro->title_oaca);// name-based uuid
				$registro->id = $uuid->toString();
				return true;
			});
	}

	public function parentRegistrooaca()
	{
		return $this->belongsTo('App\Models\RegistroOaca', 'parent');
	}

	public function elements(){
		return $this->hasMany('App\Models\ElementsOaca','register_id');
	}

	public static function contentRegistry($id){
		$query= self:: where('user_id',$id);
		return $query;
	}

	public function registry_pattern()
	{
		 return $this->hasOne('App\Models\RegistryPattern', 'id_registry');
	}

	public function colaborators(){
		return $this->hasMany('App\Models\Colaborators','id_registry');
	}

}
