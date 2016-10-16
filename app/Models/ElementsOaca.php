<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementsOaca extends Model
{

	const USER_ID = '1';
	const UUID_REGISTER = '17d850f4-8e16-3f5a-aaf1-58e9f418b292';
	const INTRODUCTION = "introduction";
	const MOTIVATION = "motivation";
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
	const MOTIVATION_ARRAY = ["mental_images","attention"];
	const MENTAL_IMAGES = "mental_images";
	const ATTENTION = "attention"; 
	
	protected $table = 'elements';
	

	protected $fillable = [
	'type_element',
	'content',
	'area',
	'position_order',
	'contentchild',
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

	public static function arrayContentChild($typeElement, $id){
		$content = self::where('register_id','=',$id)
		->where('moment','=',$typeElement)
		->orderBy('position_order','asc')
		->get();

		$collect = [];
		foreach ($content as $key => $value) {
			# code...
			$collect[$value->contentchild][]=$value;
		}

		return $collect;

	}

	public static function searchElementsDevelop($id){

		$all = self::where('register_id','=',$id)
		->where('moment','=','development')
		->orderBy('position_order','asc')
		->get();

		$collect = [];
		$collect2 = [];

		foreach ($all as $key => $value) {
			
			switch ($value->pattern_pedagogicaltechno) {
				case 'explanation':
				$collect['explanation'][]=$value;
				$collect2['explanation'][$value->contentchild][]=$value;
				break;
				case 'exemplification':
				$collect['exemplification'][]=$value;
				$collect2['exemplification'][$value->contentchild][]=$value;
				break;
				case 'application':
				$collect['application'][]=$value;
				$collect2['application'][$value->contentchild][]=$value;
				break;
				case 'justification':
				$collect['justification'][]=$value;
				$collect2['justification'][$value->contentchild][]=$value;
				break;
				case 'compare':
				$collect['compare'][]=$value;
				$collect2['compare'][$value->contentchild][]=$value;
				break;
				case 'contrast':
				$collect['contrast'][]=$value;
				$collect2['contrast'][$value->contentchild][]=$value;
				break;
				case 'contextualization':
				$collect['contextualization'][]=$value;
				$collect2['contextualization'][$value->contentchild][]=$value;
				break;
				case 'generalization':
				$collect['generalization'][]=$value;
				$collect2['generalization'][$value->contentchild][]=$value;
				break;
				
				default:
						# code...
				break;
			}


		}

		$collectgeneral[1]=$collect;
		$collectgeneral[2]=$collect2;
		//dd($collectgeneral[1]);
		return $collectgeneral;

	}


	public static function searchElementsClose($id){

		$all = self::where('register_id','=',$id)
		->where('moment','=','close')
		->orderBy('position_order','asc')
		->get();

		$collect = [];
		$collect2 = [];

		foreach ($all as $key => $value) {
			
			switch ($value->pattern_pedagogicaltechno) {
				case 'systematization':
				$collect['systematization'][]=$value;
				$collect2['systematization'][$value->contentchild][]=$value;
				break;
				case 'investigation':
				$collect['investigation'][]=$value;
				$collect2['investigation'][$value->contentchild][]=$value;
				break;
				case 'evaluation':
				$collect['evaluation'][]=$value;
				$collect2['evaluation'][$value->contentchild][]=$value;
				break;
			}


		}
		$collectgeneral[1]=$collect;
		$collectgeneral[2]=$collect2;
		return $collectgeneral;

	}

	public static function searchElementsMotivation($id){

		$all = self::where('register_id','=',$id)
		->where('moment','=','motivation')
		->orderBy('position_order','asc')
		->get();

		$collect = [];
		$collect2 = [];

		foreach ($all as $key => $value) {
			
			switch ($value->pattern_pedagogicaltechno) {
				case 'mental_images':
				$collect['mental_images'][]=$value;
				$collect2['mental_images'][$value->contentchild][]=$value;
				break;
				case 'attention':
				$collect['attention'][]=$value;
				$collect2['attention'][$value->contentchild][]=$value;
				break;
			}


		}
		$collectgeneral[1]=$collect;
		$collectgeneral[2]=$collect2;
		return $collectgeneral;

	}

}
