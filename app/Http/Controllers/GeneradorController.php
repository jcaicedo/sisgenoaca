<?php
namespace App\Http\Controllers;
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

public function registro(){

$data = $request->input('data'); //se debe guardar $data en la BD y no el json.
$json = json_decode($data); // aqui se convierte en json

dd($request->input('data'));
//      $data = Input::all();
//    print_r($data);die;
//}
}

public function view_objetos_create(){

return view('oaca.objetos.create');
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
}