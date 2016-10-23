<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistryPattern extends Model
{
	protected $table = 'registry_pattern';

	protected $fillable = [
	'id_registry',
	'id_pattern'
	];

	 public $timestamps = false;

	public function registry()
	{
		return $this->belongsTo('App\Models\RegistroOaca', 'id_registry');
	}

	public function pattern()
	{
		return $this->belongsTo('App\Models\Patterns', 'id_pattern');
	}


	public static function createRelation($id_registry, $id_pattern){

			$relation = self::firstOrNew(['id_registry'=>$id_registry]);
			$relation->id_pattern = $id_pattern;

			return $relation;


	}

}
