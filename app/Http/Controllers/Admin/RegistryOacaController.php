<?php

namespace App\Http\Controllers\Admin;

use App\Models\RegistroOaca;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegistryOacaController extends Controller
{

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
}
