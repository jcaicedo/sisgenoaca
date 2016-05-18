<?php
namespace App\Http\Controllers\Admin;
use App\RegistroOaca;
use App\Content;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GeneradorController extends Controller
{

function index(){
}

function form_register(){
return view('admin.oaca.registro');
}

public function registro(Request $request){

$data=$request->input('obj');

if($request->ajax()){




return 'si';




}else{

return 'no';

}
}

public function createOaca(){

return view('admin.oaca.create_oaca');
}

public function create_objetos(Request $request){

$content= new Content;

$confirmacion = array(
'status' => 'success',
'msg' => 'Setting created successfully',
);

if($request->ajax()){

$data=$request->input('obj');

$response = json_encode($data);

$content->contenido=$response;

$content->save();

return response()->json($confirmacion);

}else{

return 'no';

}

}

function pruebas(){
	return view('pruebas.prueba');
}

}