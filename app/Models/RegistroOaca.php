<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class RegistroOaca extends Model
{

	protected $table = 'registro_oaca';

	protected $fillable = [
	'content_register',
	'title_oaca',
	'user_id',
	'plantilla',
	'status_public',
	'status_share',
	'type',
	'register_parent',
	'licencia',
	'pattern_id',
	];

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

	public function colaborators(){
		return $this->hasMany('App\Models\Colaborators','id_registry');
	}

	public function pattern(){
		return $this->belongsTo('App\Models\Patterns');
	}

	public static function getReferences(){
		$query = self::first();
		$references = json_decode($query->content_register);
		return $references->references_bibliographies;

	}

}
