<?php
namespace App\Http\Controllers\Admin;
use App\Models\RegistroOaca;
use App\Content;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GeneradorController extends Controller
{

	const USER_ID = '45';

	function index(){
	}

	


	function getRegister(){
		return view('admin.oaca.register');
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

		return view('admin.oaca.objetos.create_oaca',["register"=>$content_register->id]);
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

}


