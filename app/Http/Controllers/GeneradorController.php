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

    public function registro(Request $request){

$data=Input::all();
        if(Request::ajax()){
            return response()->json(['respuesta'=>'ok']);
        }





    }


    public function view_objetos_create(){
        return view('oaca.objetos.create');
    }

    public function create_objetos(Request $request){
        return response()->json(['respuesta'=>'objeto contenido creado']);
    }


}
