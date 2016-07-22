<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementsOaca extends Model
{

	const USER_ID = '45';
	const UUID_REGISTER = 'ab2e88c6-f141-3fcc-81c7-ff7fa12e06a0';
	const INTRODUCTION = "introduction";
	const DEVELOPMENT = "develoment";
	
	protected $table = 'elements';
	

	protected $fillable = [
	'type_element',
	'content',
	'area',
	'position_order',
	'register_id',
	];

	public function registry(){

		return $this->belongsTo('App\Models\RegistroOaca');
	}

	

}
