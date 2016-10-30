<?php

namespace App\Http\Controllers\Admin;

use App\Models\RegistroOaca;
use App\Models\ElementsOaca;
use App\Models\Patterns;
use App\Models\RegistryPattern;
use App\Models\ImagesColaborators;
use App\Models\RegistryImagesColaborators;
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

		/*
		*Guardado de imágenes de logo de la organizacion en los colaboradores
		*/
		if(!empty($request->file('colaborator'))){
			foreach ($request->file('colaborator') as $key => $value) {
				$name = $value["image_organization"]->getClientOriginalName();
				//assets/imgs/contents-img/registry/colaborators
				$url= public_path().'/assets/imgs/contents-img/registry/colaborators';
				$value["image_organization"]->move($url,$name);
				/*save image colaborators*/
				$image_colaborator = new ImagesColaborators;
				$image_colaborator->name=$name;
				$image_colaborator->path='/assets/imgs/contents-img/registry/colaborators/'.$name;
				$image_colaborator->save();

				/*save relation registry images colaborators*/
				$relation = new RegistryImagesColaborators;
				$relation->id_registry = $content_register->id;
				$relation->id_image_colaborator = $image_colaborator->id;
				$relation->save();
			}

		}


		return view('admin.oaca.objetos.motivation.add',[
			"register_id"=>$content_register->id,
			"pattern_array" => ElementsOaca::MOTIVATION_ARRAY,
			"task_moment" => "create"
		]);
	}

	//////////////////

	public function getEdit($id){
		$registro =  RegistroOaca::find($id);
		 //dd($registro->registry_image_colaborators);
		//Hacer json_decode del content->register para convertir el contenido del registro en un array
		$content_register=json_decode($registro->content_register);
		//	dd($content_register);
		return view('admin.oaca.registry.edit',[
			'registro'=>$registro,
			'content_register'=>$content_register
		]);

	}

	public function postEdit(Request $request){
		dd($request->input());
		$array_images = [];
		$register_edited = RegistroOaca::find($request->input('register_id'));
		$content = json_encode($request->input());
		$register_edited->content_register = $content;
		$register_edited->title_oaca = $request->input('title');
		$register_edited->user_id = $request->input('user_id');
		$register_edited->plantilla = $request->input('plantilla');
		$register_edited->licencia  = $request->input('licencia');
		//	dd( $request->input('licencia'));
		$register_edited->save();

		foreach ($request->input('colaborator') as $key => $value) {
		//dd($request->input('colaborator'));
			$id_image = $value['image_organization_content']['id'];

			if(!empty($value['image_organization_content']['name'])){

				$image = 	$request->file('colaborator');
				//dd($image[1]['image_organization_content']['image']);
				$name_image = $image[$key]['image_organization_content']['image']->getClientOriginalName();
				$url= public_path().'/assets/imgs/contents-img/registry/colaborators';
				$image[$key]['image_organization_content']['image']->move($url,$name_image);

				$image_colaborator = ImagesColaborators::firstOrCreate(['id'=>$id_image]);
				$image_colaborator->name=$name_image;
				$image_colaborator->path='/assets/imgs/contents-img/registry/colaborators/'.$name_image;
				$image_colaborator->save();
			//	printf($image_colaborator);
				/*save relation registry images colaborators*/
				$relation = RegistryImagesColaborators::firstOrNew([
					'id_image_colaborator'=>$image_colaborator->id,
					'id_registry' => $register_edited->id

				]);
				$relation->save();
			//	printf($relation);
				$array_images[$key]=$image_colaborator;
			}else{
				$array_images[$key]=$id_image;
			}
		}

		//ImagesColaborators::deleteImagesArray($array_images,$id_registry);

		//dd('stop');
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
