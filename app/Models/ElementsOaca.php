<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementsOaca extends Model
{

	const USER_ID = '1';
	const UUID_REGISTER = 'a1d09e67-2eaf-35e2-a738-08b7864e1576';
	const INTRODUCTION = "introduction";
	const DEVELOPMENT = "develoment";
	const EXPLANATION = "explanation";
	const EXEMPLIFICATION = "exemplification";
	const APPLICATION = "application";
	const JUSTIFICATION = "justification";
	const COMPARE = "compare";
	const CONTRAST = "contrast";
	const CONTEXTUALIZATION = "contextualization";
	const GENERALIZATION = "generalization";
	const DEVELOP_ARRAY = ["explanation","exemplification","application","justification","compare","contrast","contextualization","generalization"];
	
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

	public static function contentOaca($typeElement, $id){

		$content = self::where('register_id','=',$id)
		->where('area','=',$typeElement)
		->orderBy('position_order','asc')
		->get();

		return $content;

	}

	

}
