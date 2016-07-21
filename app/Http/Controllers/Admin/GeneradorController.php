<?php
namespace App\Http\Controllers\Admin;
use App\Models\RegistroOaca;
use App\Models\ElementsOaca;
use App\Content;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GeneradorController extends Controller
{



	function index(){
	}

	


	function getRegister(){


		return view('admin.oaca.register.register');
	}

	function getEditRegister(){
		$registro =  RegistroOaca::find(RegistroOaca::REGISTROID);
		//Hacer json_decode del content->register para convertir el contenido del registro en un array
		$content_regiter=json_decode($registro->content_register);

		return view('admin.oaca.register.edit',['regitro'=>$registro,'content_register'=>$content_regiter]);

	}
/*	function getRegisteraux(){
		return view('admin.oaca.register');
	}*/

	function postRegister(Request $request){

		//$content = serialize($request->input());
		$content = json_encode($request->input());

		$content_register = new RegistroOaca();

		$content_register->content_register = $content;
		$content_register->title_oaca = $request->input('title');
		$content_register->user_id = $request->input('user_id');
		$content_register->save();

		return view('admin.oaca.objetos.introduction.add',["register_id"=>$content_register->id, "area"=>ElementsOaca::INTRODUCTION]);
	}


	public function postCreateoaca(Request $request){
		

		// $objeto=$request->input('obj');

		// if($request->hasFile('image')){

		// 	$filebackground = $request->file('image');
		// 	$namebackground = $filebackground->getClientOriginalName();
		// 	$public_path = public_path();		
		// 	$url = $public_path.'/assets/imgs';

		// 	$filebackground->move($url, $namebackground);
		// 	dd($url);
		// }

		if($request->ajax()){

			return $request->input('content');
		}else{

			return 'no';

		}
	}



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

	function getIntroduction(){
		return view('admin.oaca.objetos.introduction.add',[
			"register_id" =>ElementsOaca::UUID_REGISTER,
			"area"=>ElementsOaca::INTRODUCTION]);
	}

	function postIntroduction(Request $request){

		$position = 0;
		$imagesarray = array();
		

		foreach ($request->input() as $key => $value) {

			$typeelement = explode('-',$key);



			switch ($typeelement[0]) {

				case 'title':
					# code...
				$element = new ElementsOaca();
				$element->type_element ='title';
				$element->content = $value;
				$element->area = ElementsOaca::INTRODUCTION;
				$element->position_order = $position;
				$element->register_id = $request->input('register_id');
				$element->save();
				$position++;
				break;

				case 'textarea':

				$element = new ElementsOaca();
				$element->type_element ='textarea';
				$element->content = $value;
				$element->area = ElementsOaca::INTRODUCTION;
				$element->position_order = $position;
				$element->register_id = $request->input('register_id');
				$element->save();
				$position++;

				break;

				case 'image':

				$element = new ElementsOaca();
				$element->type_element ='image';
				$element->area = ElementsOaca::INTRODUCTION;
				$element->position_order = $position;
				$element->register_id = $request->input('register_id');

				$filebackground = $request->file($key);
				$namebackground = $filebackground->getClientOriginalName();
				$public_path = public_path();		
				$url = $public_path.'/assets/imgs/contents-img/introduction';
				$filebackground->move($url, $namebackground);
				$element->content = '/assets/imgs/contents-img/introduction/'.$namebackground;

				$element->save();
				$position++;

				break;

				default:
					# code...
				break;
			}



		}


		
		return view('admin.oaca.objetos.development.add',[
			"register_id" =>$request->input('register_id'),
			"area"=>ElementsOaca::DEVELOPMENT]);
	}

	function getDevelopment(){
		return view('admin.oaca.objetos.development.add',[
			"register_id" =>ElementsOaca::UUID_REGISTER,
			"area"=>ElementsOaca::DEVELOPMENT]);
	}

	function postDevelopment(Request $request){
		

		$position = 0;
		$imagesarray = array();
		

		foreach ($request->input() as $key => $value) {

			$typeelement = explode('-',$key);



			switch ($typeelement[0]) {

				case 'title':
					# code...
				$element = new ElementsOaca();
				$element->type_element ='title';
				$element->content = $value;
				$element->area = ElementsOaca::DEVELOPMENT;
				$element->position_order = $position;
				$element->register_id = $request->input('register_id');
				$element->save();
				$position++;
				break;

				case 'textarea':

				$element = new ElementsOaca();
				$element->type_element ='textarea';
				$element->content = $value;
				$element->area = ElementsOaca::DEVELOPMENT;
				$element->position_order = $position;
				$element->register_id = $request->input('register_id');
				$element->save();
				$position++;

				break;

				case 'image':

				$element = new ElementsOaca();
				$element->type_element ='image';
				$element->area = ElementsOaca::DEVELOPMENT;
				$element->position_order = $position;
				$element->register_id = $request->input('register_id');

				$filebackground = $request->file($key);
				$namebackground = $filebackground->getClientOriginalName();
				$public_path = public_path();		
				$url = $public_path.'/assets/imgs/contents-img/development';
				$filebackground->move($url, $namebackground);
				$element->content = '/assets/imgs/contents-img/development/'.$namebackground;

				$element->save();
				$position++;

				break;

				default:
					# code...
				break;
			}



		}

		$request->session()->flash('flash_message', trans('admin.oaca_created'));
		
		return view('admin.oaca.dashboard.dashboard');


	}

}


