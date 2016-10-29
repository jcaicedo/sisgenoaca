<?php

namespace App\Http\Controllers\Admin;

use App\Models\RegistroOaca;
use App\Models\ElementsOaca;
use App\Models\Patterns;
use App\Models\RegistryPattern;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegistryOacaController extends Controller
{



	public function getRegistrys(){

		$registrys = RegistroOaca::contentRegistry(Auth::user()->id)->get();
		return view('admin.oaca.registry.index',["registrys"=>$registrys]);
	}

	public function getCreate(){
		return view('admin.oaca.registry.create');
	}
	public function postCreate(Request $request){
		/*
		*Guardado de imágenes de logo de la organizacion en los colaboradores
		*/
		if(!empty($request->file('colaborator'))){
			foreach ($request->file('colaborator') as $key => $value) {
				$name = $value["image_organization"]->getClientOriginalName();
				//assets/imgs/contents-img/registry/colaborators
				$url= public_path().'/assets/imgs/contents-img/registry/colaborators';
				$value["image_organization"]->move($url,$name);

			}

		}

		$content = json_encode($request->input());
		$content_register = new RegistroOaca();


		$content_register->content_register = $content;
		$content_register->title_oaca = $request->input('title');
		$content_register->user_id = $request->input('user_id');
		$content_register->plantilla = $request->input('plantilla');
		$content_register->licencia  = $request->input('licencia');

		$content_register->save();

		/*
		*Registro de pattern seleccionado
		*/
		$id_pattern = $request->input('pattern');

		//dd($content_register->id);
		$pattern =	RegistryPattern::createRelation($content_register->id,$id_pattern);
		$pattern->save();



		return view('admin.oaca.objetos.motivation.add',[
			"register_id"=>$content_register->id,
			"pattern_array" => ElementsOaca::MOTIVATION_ARRAY,
			"task_moment" => "create"
		]);
	}

	//////////////////

	public function getEdit($id){
		$registro =  RegistroOaca::find($id);
		//dd($registro->registry_pattern->id_pattern);
		//Hacer json_decode del content->register para convertir el contenido del registro en un array
		$content_register=json_decode($registro->content_register);
	//	dd($content_register);
		return view('admin.oaca.registry.edit',[
			'registro'=>$registro,
			'content_register'=>$content_register
		]);

	}

	public function postEdit(Request $request){
		$register_edited = RegistroOaca::find($request->input('register_id'));
		$content = json_encode($request->input());
		$register_edited->content_register = $content;
		$register_edited->title_oaca = $request->input('title');
		$register_edited->user_id = $request->input('user_id');
		$register_edited->plantilla = $request->input('plantilla');
		$register_edited->licencia  = $request->input('licencia');
	//	dd( $request->input('licencia'));
		$register_edited->save();

		return redirect('/admin/oaca/registry/registrys');


	}

	public function delete(Request $request, $id)
	{

		$registry = RegistroOaca::find($id);
		$registry->delete();
		$request->session()->flash('flash_message','Registro Eliminado');
		return redirect('admin/oaca/registry/registrys');
	}

}
