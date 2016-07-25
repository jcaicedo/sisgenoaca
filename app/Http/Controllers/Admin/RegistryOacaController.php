<?php

namespace App\Http\Controllers\Admin;

use App\Models\RegistroOaca;
use App\Models\ElementsOaca;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegistryOacaController extends Controller
{



	function getRegistrys(){

		$registrys = RegistroOaca::contentRegistry(Auth::user()->id)->get();

		

		return view('admin.oaca.registry.index',["registrys"=>$registrys]);
	}

	function getCreate(){


		return view('admin.oaca.registry.create');
	}
	function postCreate(Request $request){

		//$content = serialize($request->input());
		$content = json_encode($request->input());

		$content_register = new RegistroOaca();

		$content_register->content_register = $content;
		$content_register->title_oaca = $request->input('title');
		$content_register->user_id = $request->input('user_id');
		$content_register->save();

		return view('admin.oaca.objetos.introduction.add',["register_id"=>$content_register->id, "area"=>ElementsOaca::INTRODUCTION]);
	}

		//////////////////

	function getEdit($id){
		$registro =  RegistroOaca::find($id);
		//Hacer json_decode del content->register para convertir el contenido del registro en un array
		$content_regiter=json_decode($registro->content_register);
		return view('admin.oaca.registry.edit',['registro'=>$registro,'content_register'=>$content_regiter]);

	}

	function postEdit(Request $request){
		$register_edited = RegistroOaca::find($request->input('register_id'));
		$content = json_encode($request->input());
		$register_edited->content_register = $content;
		$register_edited->title_oaca = $request->input('title');
		$register_edited->user_id = $request->input('user_id');
		$register_edited->save();

		return redirect('/admin/oaca/registry/registrys');


	}
}
