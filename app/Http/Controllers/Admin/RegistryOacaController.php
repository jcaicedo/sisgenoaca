<?php

namespace App\Http\Controllers\Admin;

use App\Models\RegistroOaca;
use App\Models\ElementsOaca;
use App\Models\Patterns;
use App\Models\RegistryPattern;
use App\Models\Colaborators;
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
		//dd($request->input('colaborator'));

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


		foreach ($request->input('colaborator') as $key => $colaborator) {

			$image = $request->file('colaborator')[$key]["image_organization"];
		 	$this->saveColaborators($colaborator,$content_register->id, $image);

		}


		return view('admin.oaca.objetos.motivation.add',[
			"register_id"=>$content_register->id,
			"pattern_array" => ElementsOaca::MOTIVATION_ARRAY,
			"task_moment" => "create"
		]);
	}

	////////////////////////////////////////////
	///////Edicion/////////////////////////////
	////////////////////////////////////////////

	public function getEdit($id){
		$registro =  RegistroOaca::find($id);
		//Hacer json_decode del content->register para convertir el contenido del registro en un array
		$content_register=json_decode($registro->content_register);
		return view('admin.oaca.registry.edit',[
			'registro'=>$registro,
			'content_register'=>$content_register
		]);

	}

	public function postEdit(Request $request){

		$array_colaborators = []; //array para guardar los id's de los colaboradores que deben quedarse

		/*
		*Guardando los ajuses de registro editado
		*/
		$register_edited = RegistroOaca::find($request->input('register_id'));
		$content = json_encode($request->input());
		$register_edited->content_register = $content;
		$register_edited->title_oaca = $request->input('title');
		$register_edited->user_id = $request->input('user_id');
		$register_edited->plantilla = $request->input('plantilla');
		$register_edited->licencia  = $request->input('licencia');
		$register_edited->save();

		/*
		*Se recorren los colaboradores para ingresarlos
		*al modelo correspondiente.
		*por cada uno agregado o modificado se guarda en el array_colaborators
		*/

		foreach ($request->input('colaborator') as $key => $colaborator) {
			$image = $request->file('colaborator')[$key]["image_organization"];
			$saved = $this->saveColaborators($colaborator,$register_edited->id, $image);
			$array_colaborators[$key] = $saved->id;
		}

		/*
		* Se pasa a deleteNotColaborators el arrary para eliminar los colaborators
		* que ya no pertenecen al registry
		*/
		Colaborators::deleteNotColaborators($array_colaborators,$register_edited->id);

		/*
		*Se actualiza la informacion respecto al patron que esta utilizando el nuevo registro.
		*/
		$id_pattern = $request->input('pattern');
		$relation_pattern = RegistryPattern::firstOrCreate(['id_registry'=>$register_edited->id]);
		$relation_pattern->id_pattern = $id_pattern;
		$relation_pattern->save();

		return redirect('/admin/oaca/registry/registrys');


	}

	//////////////////////////////////////////////////
	///////////////Eliminar Registry//////////////////
	//////////////////////////////////////////////////

	public function delete(Request $request, $id)
	{

		$registry = RegistroOaca::find($id);
		$registry->delete();
		$request->session()->flash('flash_message','Registro Eliminado');
		return redirect('admin/oaca/registry/registrys');
	}

	////////////////////////////////////////////////////////////
	//////Function para guardar o editar los colaboradores//////
	////////////////////////////////////////////////////////////

	public function saveColaborators($colaborator, $id_registry, $image){
		
		$newcolaborator = Colaborators::firstOrNew(['id'=>$colaborator['id']]);
		$newcolaborator->id_registry = $id_registry;
		$newcolaborator->name = $colaborator['name'];
		$newcolaborator->lastname = $colaborator['lastname'];
		$newcolaborator->typecontribution = $colaborator['typecontribution'];
		$newcolaborator->email = $colaborator['email'];
		$newcolaborator->organization = $colaborator['organization'];

		if(!empty($image)){
			$nameImage = $image->getClientOriginalName();
			$url = public_path().'/assets/imgs/contents-img/registry/colaborators';
			$image->move($url,$nameImage);

			$newcolaborator->image_organization = '/assets/imgs/contents-img/registry/colaborators/'.$nameImage;
		}
		$newcolaborator->save();

		return $newcolaborator;


	}

}
