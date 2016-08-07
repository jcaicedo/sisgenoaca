<?php
namespace App\Http\Controllers\Admin;
use App\Models\RegistroOaca;
use App\Models\ElementsOaca;
//use App\Content;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class GeneradorController extends AdminController
{

	function preview(Request $request){

		$namebackground=false;

		$objeto=$request->input('obj');

		if($request->hasFile('image')){

			$filebackground = $request->file('image');
			$namebackground = $filebackground->getClientOriginalName();
			$public_path = public_path();		
			$url = $public_path.'/assets/imgs';
			dd($url);
			$filebackground->move($url, $namebackground);
			return 'si';
		}
		return $request->input('obj');
	}


	function getEditIntroduction($id){


		$registrys = RegistroOaca::contentRegistry(Auth::user()->id)->get();
		$content_Introduction= ElementsOaca::contentOaca(ElementsOaca::INTRODUCTION, $id);

		

		return view('admin.oaca.objetos.introduction.edit',[
			"register_id" =>ElementsOaca::UUID_REGISTER,
			"moment"=>ElementsOaca::INTRODUCTION,
			"registrys"=>$registrys,
			"contentIntroduction" => $content_Introduction
			]);
	}

	function getIntroduction(){
		return view('admin.oaca.objetos.introduction.add',[
			"register_id" =>ElementsOaca::UUID_REGISTER,
			"moment"=>ElementsOaca::INTRODUCTION]);
	}

	function postIntroduction(Request $request){
		$position = 0;

		//dd($request->input('data'));

		foreach ($request->input('data') as $key => $value) {

			if($value['type']!='image'){
				$element = ElementsOaca::firstOrNew(['id' => $value['id']]);
				$element->type_element = $value['type'];
				$element->content = $value['content'];
				$element->moment = ElementsOaca::INTRODUCTION;
				$element->position_order = $position;
				$element->register_id =  $request->input('register_id');
				$element->save();
				$position ++;
			}else if($value['type'] == 'image'){

				$element = ElementsOaca::firstOrNew(['id'=>$value['id']]);
				$element->type_element = $value['type'];
				$element->moment = ElementsOaca::INTRODUCTION;
				$element->position_order = $position;
				$element->register_id =  $request->input('register_id');

				$filebackground = $request->file( $value['content']);
				$namebackground = $filebackground->getClientOriginalName();
				$public_path = public_path();		
				$url = $public_path.'/assets/imgs/contents-img/introduction';
				$filebackground->move($url, $namebackground);
				$element->content = '/assets/imgs/contents-img/introduction/'.$namebackground;
				$element->save();
				$position ++;

			}
		}

		return view('admin.oaca.objetos.development.add',[
			"register_id" =>$request->input('register_id'),
			"moment"=>ElementsOaca::DEVELOPMENT,
			"pattern_pedagogicaltechno" => ElementsOaca::EXPLANATION

			]);
	}


	function getDevelopment(){
		return view('admin.oaca.objetos.development.add',[
			"register_id" =>ElementsOaca::UUID_REGISTER,
			"moment"=>ElementsOaca::DEVELOPMENT,
			"pattern_pedagogicaltechno" => ElementsOaca::EXPLANATION
			]);
	}

	function postDevelopment(Request $request){
		
		$input_pattern_pedagogicaltechno = $request->input('patron_tecnopedagogico');

		if($input_pattern_pedagogicaltechno!= ElementsOaca::GENERALIZATION){

			$position = 0;

		//dd($request->input('data'));

			foreach ($request->input('data') as $key => $value) {

				if($value['type']!='image'){
					$element = ElementsOaca::firstOrNew(['id' => $value['id']]);
					$element->type_element = $value['type'];
					$element->content = $value['content'];
					$element->moment = ElementsOaca::DEVELOPMENT;
					$element->pattern_pedagogicaltechno = $input_pattern_pedagogicaltechno;
					$element->position_order = $position;
					$element->register_id =  $request->input('register_id');
					$element->save();
					$position ++;
				}else if($value['type'] == 'image'){

					$element = ElementsOaca::firstOrNew(['id'=>$value['id']]);
					$element->type_element = $value['type'];
					$element->moment = ElementsOaca::DEVELOPMENT;
					$element->pattern_pedagogicaltechno = $input_pattern_pedagogicaltechno;
					$element->position_order = $position;
					$element->register_id =  $request->input('register_id');

					$filebackground = $request->file( $value['content']);
					$namebackground = $filebackground->getClientOriginalName();
					$public_path = public_path();		
					$url = $public_path.'/assets/imgs/contents-img/development';
					$filebackground->move($url, $namebackground);
					$element->content = '/assets/imgs/contents-img/development/'.$namebackground;
					$element->save();
					$position ++;

				}
			}

			switch ($input_pattern_pedagogicaltechno) {
				case 'explanation':
				$pattern_pedagogicaltechno = ElementsOaca::EXEMPLIFICATION;
				break;
				case 'exemplification':
				$pattern_pedagogicaltechno = ElementsOaca::APPLICATION;
				break;
				case 'application':
				$pattern_pedagogicaltechno = ElementsOaca::JUSTIFICATION;
				break;
				case 'justification':
				$pattern_pedagogicaltechno = ElementsOaca::COMPARE;
				break;
				case 'compare':
				$pattern_pedagogicaltechno = ElementsOaca::CONTRAST;
				break;
				case 'contrast':
				$pattern_pedagogicaltechno = ElementsOaca::CONTEXTUALIZATION;
				break;
				case 'contextualization':
				$pattern_pedagogicaltechno = ElementsOaca::GENERALIZATION;
				break;

				default:
				# code...
				break;
			}

			return view('admin.oaca.objetos.development.add',[
				"register_id" =>$request->input('register_id'),
				"momento"=>ElementsOaca::DEVELOPMENT,
				"pattern_pedagogicaltechno" => $pattern_pedagogicaltechno 
				]);

			
		}else{

			$position = 0;

		//dd($request->input('data'));

			foreach ($request->input('data') as $key => $value) {

				if($value['type']!='image'){
					$element = ElementsOaca::firstOrNew(['id' => $value['id']]);
					$element->type_element = $value['type'];
					$element->content = $value['content'];
					$element->moment = ElementsOaca::DEVELOPMENT;
					$element->pattern_pedagogicaltechno = $input_pattern_pedagogicaltechno;
					$element->position_order = $position;
					$element->register_id =  $request->input('register_id');
					$element->save();
					$position ++;
				}else if($value['type'] == 'image'){

					$element = ElementsOaca::firstOrNew(['id'=>$value['id']]);
					$element->type_element = $value['type'];
					$element->moment = ElementsOaca::DEVELOPMENT;
					$element->pattern_pedagogicaltechno = $input_pattern_pedagogicaltechno;
					$element->position_order = $position;
					$element->register_id =  $request->input('register_id');

					$filebackground = $request->file( $value['content']);
					$namebackground = $filebackground->getClientOriginalName();
					$public_path = public_path();		
					$url = $public_path.'/assets/imgs/contents-img/development';
					$filebackground->move($url, $namebackground);
					$element->content = '/assets/imgs/contents-img/development/'.$namebackground;
					$element->save();
					$position ++;

				}
			}

			return redirect ('/admin');
			
		}

	}

	public function getEditoaca(){

		return view('admin.oaca.objetos.edit');
	}

	public function getPrueba(){
		return redirect('admin/oaca/objetos/edit-introduction/'.RegistroOaca::REGISTROID);
	}

}


