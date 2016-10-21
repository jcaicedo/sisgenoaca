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

	public function registry()
	{
		return $this->belongsTo('App\Models\RegistroOaca', 'id_registry');
	}

	public function pattern()
	{
		return $this->belongsTo('App\Models\Patterns', 'id_pattern');
	}

}
