<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementsOaca extends Model
{

	const USER_ID = '1';
	const UUID_REGISTER = '4ab1a90f-3dc9-30a8-9a9d-a6caa7b21a5f';
	const INTRODUCTION = "introduction";
	const DEVELOPMENT = "development";
	const CLOSE = "close";
	const EXPLANATION = "explanation";
	const EXEMPLIFICATION = "exemplification";
	const APPLICATION = "application";
	const JUSTIFICATION = "justification";
	const COMPARE = "compare";
	const CONTRAST = "contrast";
	const CONTEXTUALIZATION = "contextualization";
	const GENERALIZATION = "generalization";
	const DEVELOP_ARRAY = ["explanation","exemplification","application","justification","compare","contrast","contextualization","generalization"];
	const SISTEMATIZATION = "systematization";
	const INVESTIGATION = "investigation";
	const EVALUATION = "evaluation";
	const CLOSE_ARRAY = ["systematization","investigation","evaluation"];
	
	protected $table = 'elements';
	

	protected $fillable = [
	'type_element',
	'content',
	'area',
	'position_order',
	'register_id',
	'pattern_pedagogicaltechno',
	];

	public function registry(){

		return $this->belongsTo('App\Models\RegistroOaca','register_id');
	}

	public static function contentOaca($typeElement, $id){

		$content = self::where('register_id','=',$id)
		->where('moment','=',$typeElement)
		->orderBy('position_order','asc')
		->get();
	//m	dd($content);
		return $content;

	}

	public static function searchElementsDevelop($id){

		$all = self::where('register_id','=',$id)
		->where('moment','=','development')
		->orderBy('position_order','asc')
		->get();

		$collect = [];

		foreach ($all as $key => $value) {
			
			switch ($value->pattern_pedagogicaltechno) {
				case 'explanation':
				$collect['explanation'][]=$value;
				break;
				case 'exemplification':
				$collect['exemplification'][]=$value;
				break;
				case 'application':
				$collect['application'][]=$value;
				break;
				case 'justification':
				$collect['justification'][]=$value;
				break;
				case 'compare':
				$collect['compare'][]=$value;
				break;
				case 'contrast':
				$collect['contrast'][]=$value;
				break;
				case 'contextualization':
				$collect['contextualization'][]=$value;
				break;
				case 'generalization':
				$collect['generalization'][]=$value;
				break;
				
				default:
						# code...
				break;
			}


		}

		return $collect;

	}


	public static function searchElementsClose($id){

		$all = self::where('register_id','=',$id)
		->where('moment','=','close')
		->orderBy('position_order','asc')
		->get();

		$collect = [];

		foreach ($all as $key => $value) {
			
			switch ($value->pattern_pedagogicaltechno) {
				case 'systematization':
				$collect['systematization'][]=$value;
				break;
				case 'investigation':
				$collect['investigation'][]=$value;
				break;
				case 'evaluation':
				$collect['evaluation'][]=$value;
				break;
			}


		}

		return $collect;

	}

	

}