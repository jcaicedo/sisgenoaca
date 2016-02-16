<?php

namespace App\Http\Controllers;

use App\RegistroOaca;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GeneradorController extends Controller
{


    function index(){

    }

    function form_register(){

        return view('oaca.registro.create');
    }

    public function registro(){

        //$data = $request->input('data'); //se debe guardar $data en la BD y no el json.

        //$json = json_decode($data); // aqui se convierte en json
        //dd($request->input('data'));
        if(Request::ajax()) {
      $data = Input::all();
      print_r($data);die;
    }



    }


    public function view_objetos_create(){
        return view('oaca.objetos.create');
    }

    public function create_objetos(Request $request){
        return response()->json(['respuesta'=>'objeto contenido creado']);
    }


}
