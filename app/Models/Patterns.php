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

	public $timestamps = false;

	public function registry()
	{
		return $this->hasMany('App\Models\RegistroOaca');
	}


}
