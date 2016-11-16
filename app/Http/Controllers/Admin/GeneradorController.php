<?php
namespace App\Http\Controllers\Admin;
use App\Models\RegistroOaca;
use App\Models\ElementsOaca;
use App\Models\SelectSimpleElements;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class GeneradorController extends AdminController
{


	function getMotivation(){
		return view('admin.oaca.objetos.motivation.add',[
			"register_id" =>ElementsOaca::UUID_REGISTER,
			"pattern_array" => ElementsOaca::MOTIVATION_ARRAY,
			"task_moment" => "create"
		]);
	}



	function postMotivation(Request $request){

		//dd($request->input('data'));
		$Arr = explode(",",$request->input('elementos-delete'));
		$collection = ElementsOaca::destroy($Arr);

		$position = 0;

		if ($request->input('data')) {
			foreach ($request->input('data') as $key => $value) {
				$type_element_input = $value['type'];

				switch ($type_element_input) {
					case 'title':
					$element  = ElementsOaca::firstOrNew(['id' => $value['id']]);
					$element->type_element = $value['type'];
					$element->content = $value['content'];
					$element->moment = ElementsOaca::MOTIVATION;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');
					$element->save();
					$position ++;
					break;

					case'textarea':
					$element  = ElementsOaca::firstOrNew(['id' => $value['id']]);
					$element->type_element = $value['type'];
					$element->content = $value['content'];
					$element->moment = ElementsOaca::MOTIVATION;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');
					$element->save();
					$position ++;
					break;

					case 'image':
					$element = ElementsOaca::firstOrNew(['id'=>$value['id']]);
					$element->type_element = $value['type'];
					$element->moment = ElementsOaca::MOTIVATION;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');



					$filebackground = $request->file( $value['content']);

					if($filebackground != null){
						$namebackground = $filebackground->getClientOriginalName();
						$public_path = public_path();
						$url = $public_path.'/assets/imgs/contents-img/motivation';
						$filebackground->move($url, $namebackground);
						$element->content = '/assets/imgs/contents-img/motivation/'.$namebackground;
						$element->save();
						$position ++;
					}else{

						$element->save();
						$position ++;
					}
					break;

					case 'filehtml':
					$element = ElementsOaca::firstOrNew(['id'=>$value['id']]);
					$element->type_element = $value['type'];
					$element->moment = ElementsOaca::MOTIVATION;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');



					$filebackground = $request->file( $value['content']);

					if($filebackground != null){
						$namebackground = $filebackground->getClientOriginalName();
						$public_path = public_path();
						$url = $public_path.'/assets/files';
						$filebackground->move($url, $namebackground);
						$element->content = '/assets/files/'.$namebackground;
						$element->save();
						$position ++;
					}else{

						$element->save();
						$position ++;
					}
					break;
				}

			}
		}

		if($request->input('task_moment') == 'create'){

			return view('admin.oaca.objetos.development.add',[
				"register_id" =>$request->input('register_id'),
				"pattern_array" => ElementsOaca::DEVELOP_ARRAY,
				"task_moment" => "create"

			]);

		}elseif ($request->input('task_moment') == 'edit') {

			$contentgeneral = ElementsOaca::searchElementsDevelop($request->input('register_id'));
			$content = $contentgeneral[1];
			$content2 = $contentgeneral[2];

			return view('admin.oaca.objetos.development.edit',[
				"register_id" =>$request->input('register_id'),
				"pattern_array" => ElementsOaca::DEVELOP_ARRAY,
				"content_davelop" => $content,
				"content2" => $content2,
				"task_moment" => "edit"
			]);

		}



	}

	function getEditMotivation($id){

		$collectChild =ElementsOaca::arrayContentChild(ElementsOaca::INTRODUCTION, $id);

		$registrys = RegistroOaca::contentRegistry(Auth::user()->id)->get();

		$content_Introduction= ElementsOaca::contentOaca(ElementsOaca::INTRODUCTION, $id);


		$contentgeneral = ElementsOaca::searchElementsMotivation($id);
		$content = $contentgeneral[1];
		$content2 = $contentgeneral[2];

		return view('admin.oaca.objetos.motivation.edit',[
			"register_id" =>$id,
			"pattern_array" => ElementsOaca::MOTIVATION_ARRAY,
			"content_motivation" => $content,
			"content2" => $content2,
			"task_moment" => "edit"
		]);

	}


	function getDevelopment(){
		return view('admin.oaca.objetos.development.add',[
			"register_id" =>ElementsOaca::UUID_REGISTER,
			"moment"=>ElementsOaca::DEVELOPMENT,
			"pattern_pedagogicaltechno" => ElementsOaca::EXPLANATION,
			"pattern_array" => ElementsOaca::DEVELOP_ARRAY,
			"task_moment" => "create"
		]);
	}


	function postDevelopment(Request $request){

		//dd($request->input('data'));
		$Arr = explode(",",$request->input('elementos-delete'));
		$collection = ElementsOaca::destroy($Arr);

		$position = 0;

		if ($request->input('data')) {
			foreach ($request->input('data') as $key => $value) {
				$type_element_input = $value['type'];

				switch ($type_element_input) {
					case 'title':
					$element  = ElementsOaca::firstOrNew(['id' => $value['id']]);
					$element->type_element = $value['type'];
					$element->content = $value['content'];
					$element->moment = ElementsOaca::DEVELOPMENT;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');
					$element->save();
					$position ++;
					break;

					case'textarea':
					$element  = ElementsOaca::firstOrNew(['id' => $value['id']]);
					$element->type_element = $value['type'];
					$element->content = $value['content'];
					$element->moment = ElementsOaca::DEVELOPMENT;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');
					$element->save();
					$position ++;
					break;

					case 'image':
					$element = ElementsOaca::firstOrNew(['id'=>$value['id']]);
					$element->type_element = $value['type'];
					$element->moment = ElementsOaca::DEVELOPMENT;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');



					$filebackground = $request->file( $value['content']);

					if($filebackground != null){
						$namebackground = $filebackground->getClientOriginalName();
						$public_path = public_path();
						$url = $public_path.'/assets/imgs/contents-img/development';
						$filebackground->move($url, $namebackground);
						$element->content = '/assets/imgs/contents-img/development/'.$namebackground;
						$element->save();
						$position ++;
					}else{

						$element->save();
						$position ++;
					}
					break;

					case 'filehtml':
					$element = ElementsOaca::firstOrNew(['id'=>$value['id']]);
					$element->type_element = $value['type'];
					$element->moment = ElementsOaca::DEVELOPMENT;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');



					$filebackground = $request->file( $value['content']);

					if($filebackground != null){
						$namebackground = $filebackground->getClientOriginalName();
						$public_path = public_path();
						$url = $public_path.'/assets/files';
						$filebackground->move($url, $namebackground);
						$element->content = '/assets/files/'.$namebackground;
						$element->save();
						$position ++;
					}else{

						$element->save();
						$position ++;
					}
					break;
				}

			}
		}


		if($request->input('task_moment') == 'create'){

			return view('admin.oaca.objetos.close.add',[
				"register_id" =>$request->input('register_id'),
				"pattern_array" => ElementsOaca::CLOSE_ARRAY,
				"task_moment" => "create"

			]);

		}elseif ($request->input('task_moment') == 'edit') {

			$contentgeneral = ElementsOaca::searchElementsClose($request->input('register_id'));
			$content = $contentgeneral[1];
			$content2 = $contentgeneral[2];

			return view('admin.oaca.objetos.close.edit',[
				"register_id" =>$request->input('register_id'),
				"pattern_array" => ElementsOaca::CLOSE_ARRAY,
				"content_close" => $content,
				"content2" => $content2,
				"task_moment" => "edit"
			]);

		}



	}

	function getClose(){
		return view('admin.oaca.objetos.close.add',[
			"register_id" =>ElementsOaca::UUID_REGISTER,
			"moment"=>ElementsOaca::DEVELOPMENT,
			"pattern_pedagogicaltechno" => ElementsOaca::EXPLANATION,
			"pattern_array" => ElementsOaca::DEVELOP_ARRAY,
			"task_moment" => "create"
		]);
	}

	function postClose(Request $request){

		//dd($request->input('data'));
		$Arr = explode(",",$request->input('elementos-delete'));
		$collection = ElementsOaca::destroy($Arr);

		$position = 0;

		if ($request->input('data')) {
			foreach ($request->input('data') as $key => $value) {
				$type_element_input = $value['type'];

				switch ($type_element_input) {
					case 'title':
					$element  = ElementsOaca::firstOrNew(['id' => $value['id']]);
					$element->type_element = $value['type'];
					$element->content = $value['content'];
					$element->moment = ElementsOaca::CLOSE;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');
					$element->save();
					$position ++;
					break;

					case'textarea':
					$element  = ElementsOaca::firstOrNew(['id' => $value['id']]);
					$element->type_element = $value['type'];
					$element->content = $value['content'];
					$element->moment = ElementsOaca::CLOSE;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');
					$element->save();
					$position ++;
					break;

					case 'image':
					$element = ElementsOaca::firstOrNew(['id'=>$value['id']]);
					$element->type_element = $value['type'];
					$element->moment = ElementsOaca::CLOSE;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');



					$filebackground = $request->file( $value['content']);

					if($filebackground != null){
						$namebackground = $filebackground->getClientOriginalName();
						$public_path = public_path();
						$url = $public_path.'/assets/imgs/contents-img/close';
						$filebackground->move($url, $namebackground);
						$element->content = '/assets/imgs/contents-img/close/'.$namebackground;
						$element->save();
						$position ++;
					}else{

						$element->save();
						$position ++;
					}
					break;

					case 'filehtml':
					$element = ElementsOaca::firstOrNew(['id'=>$value['id']]);
					$element->type_element = $value['type'];
					$element->moment = ElementsOaca::CLOSE;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->contentchild = $value['contentchild'];
					$element->register_id =  $request->input('register_id');



					$filebackground = $request->file( $value['content']);

					if($filebackground != null){
						$namebackground = $filebackground->getClientOriginalName();
						$public_path = public_path();
						$url = $public_path.'/assets/files';
						$filebackground->move($url, $namebackground);
						$element->content = '/assets/files/'.$namebackground;
						$element->save();
						$position ++;
					}else{

						$element->save();
						$position ++;
					}
					break;
				}

			}
		}

		$registry = RegistroOaca::find($request->input('register_id'));

		if($request->input('task_moment')=='create'){
			return view('admin.oaca.objetos.finish.finish_create',[
				'registry'=>$registry
			]);
		}elseif($request->input('task_moment')=='edit'){
			return view('admin.oaca.objetos.finish.finish_edit',[
				'registry'=>$registry
			]);
		}
	}


	public function getStatus($status,$register_id){
		$register= RegistroOaca::find($register_id);
		$register->status = $status=="true"?'1':'0';
		$register->save();
		return $register;
	}

	public function getEditoaca(){

		return view('admin.oaca.objetos.edit');
	}

	public function getPrueba($register_id){

	$register= ElementsOaca::find($register_id);
	$newRegister = $register->replicate();
	$newRegister->save();

	dd($newRegister);
	}


	public function postPrueba(Request $request){

	}



	public function getBackOaca($id,$moment){

		switch ($moment) {
			case 'motivation':
			// $collectChild =ElementsOaca::arrayContentChild(ElementsOaca::INTRODUCTION, $id);
			// $registrys = RegistroOaca::contentRegistry(Auth::user()->id)->get();
			// $content_Introduction= ElementsOaca::contentOaca(ElementsOaca::INTRODUCTION, $id);
			$contentgeneral = ElementsOaca::searchElementsMotivation($id);
			$content = $contentgeneral[1];
			$content2 = $contentgeneral[2];
			return view('admin.oaca.objetos.motivation.edit',[
				"register_id" =>$id,
				"pattern_array" => ElementsOaca::MOTIVATION_ARRAY,
				"content_motivation" => $content,
				"content2" => $content2,
				"task_moment" => "edit"
			]);

			break;

			case 'development':
			$contentgeneral = ElementsOaca::searchElementsDevelop($id);
			$content = $contentgeneral[1];
			$content2 = $contentgeneral[2];

			return view('admin.oaca.objetos.development.edit',[
				"register_id" =>$id,
				"pattern_array" => ElementsOaca::DEVELOP_ARRAY,
				"content_davelop" => $content,
				"content2" => $content2,
				"task_moment" => "edit"
			]);
			break;
		}
	}

}
