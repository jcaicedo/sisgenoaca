<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementsOaca extends Model
{

	const USER_ID = '1';
	const UUID_REGISTER = 'fa0c9c89-f921-394a-b939-ecaeaf5675e9';
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

		return $this->belongsTo('App\Models\RegistroOaca','register_id');
	}

	public static function contentOaca($typeElement){

		$content = self::where('register_id','=',ElementsOaca::UUID_REGISTER)
		->where('area','=',$typeElement)
		->orderBy('position_order','asc')
		->get();

		return $content;

	}

	

}
