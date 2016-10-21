<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patterns extends Model
{
	protected $table = 'patterns';

	protected $fillable=[
	'id',
	'name',
	'description'
	];

	public function registry_pattern()
	{
		return $this->hasMany('App\Models\RegistryPattern', 'id_pattern');
	}


}
