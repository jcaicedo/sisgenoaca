<?php
namespace App\Http\Controllers\Admin;
use App\RegistroOaca;
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
		return view('admin.oaca.register');
	}
/*	function getRegisteraux(){
		return view('admin.oaca.register');
	}*/

	function postRegister(Request $request){

		dd($request->input());
		return "good";
	}

	public function registro(Request $request){

		$data=$request->input('obj');

		if($request->ajax()){
			return 'si';
		}else{
			return 'no';
		}
	}

	public function getCreateoaca(){

		return view('admin.oaca.objetos.create_oaca');
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


