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
			"register_id" =>$id,
			"moment"=>ElementsOaca::INTRODUCTION,
			"contentIntroduction" => $content_Introduction,
			"taks_moment" => 'edit'
			]);
	}

	function getIntroduction(){
		return view('admin.oaca.objetos.introduction.add',[
			"register_id" =>ElementsOaca::UUID_REGISTER,
			"moment"=>ElementsOaca::INTRODUCTION]);
	}

	function postIntroduction(Request $request){
		//dd($request->input('data'));
		
		$Arr = explode(",",$request->input('elementos-delete'));
		$collection = ElementsOaca::destroy($Arr);

		$position = 0;

		
		if($request->input('data')){

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

					if($filebackground != null){
						
						$namebackground = $filebackground->getClientOriginalName();
						$public_path = public_path();		
						$url = $public_path.'/assets/imgs/contents-img/introduction';
						$filebackground->move($url, $namebackground);
						$element->content = '/assets/imgs/contents-img/introduction/'.$namebackground;
						$element->save();
						$position ++;
					}else{

						$element->save();
						$position ++;
					}
					

				}
			}}

			if($request->input('taks_moment') == 'create'){

				return view('admin.oaca.objetos.development.add',[
					"register_id" =>$request->input('register_id'),
					"pattern_array" => ElementsOaca::DEVELOP_ARRAY

					]);

			}elseif ($request->input('taks_moment') == 'edit') {

				$content = ElementsOaca::searchElementsDevelop($request->input('register_id'));

				return view('admin.oaca.objetos.development.edit',[
					"register_id" =>$request->input('register_id'),
					"pattern_array" => ElementsOaca::DEVELOP_ARRAY,
					"content_davelop" => $content
					]);
				
			}
		}


		function getDevelopment(){
			return view('admin.oaca.objetos.development.add',[
				"register_id" =>ElementsOaca::UUID_REGISTER,
				"moment"=>ElementsOaca::DEVELOPMENT,
				"pattern_pedagogicaltechno" => ElementsOaca::EXPLANATION,
				"pattern_array" => ElementsOaca::DEVELOP_ARRAY
				]);
		}

		function postDevelopment(Request $request){

			//dd($request->input('data'));
			$position = 0;

			foreach ($request->input('data') as $key => $value) {
				if($value['type']!='image'){

					$element  = ElementsOaca::firstOrNew(['id' => $value['id']]);
					$element->type_element = $value['type'];
					$element->content = $value['content'];
					$element->moment = ElementsOaca::DEVELOPMENT;
					$element->pattern_pedagogicaltechno = $value['pattern'];
					$element->position_order = $position;
					$element->register_id =  $request->input('register_id');
					$element->save();
					$position ++;


				}else if($value['type']== 'image'){

					$element = ElementsOaca::firstOrNew(['id'=>$value['id']]);
					$element->type_element = $value['type'];
					$element->moment = ElementsOaca::DEVELOPMENT;
					$element->pattern_pedagogicaltechno = $value['pattern'];
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

		public function getEditoaca(){

			return view('admin.oaca.objetos.edit');
		}

		public function getPrueba(){
			return redirect('admin/oaca/objetos/edit-introduction/'.RegistroOaca::REGISTROID);
		}

	}


