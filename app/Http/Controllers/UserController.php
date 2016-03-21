<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Users;
use Hash;

class UserController extends Controller
{

public function index(){

return view('users.create');
}



public function createUser(Request $request){

$data=$request->input('obj');
//dd($data['first_name']);

$confirmacion = array(
'status' => 'success',
'msg' => 'Setting created successfully',
);

if($request->ajax()){

$user = new Users;

$user->first_name=$data['first_name'];
$user->last_name=$data['last_name'];
$user->email=$data['email'];
$user->password=Hash::make($data['password']);
$user->rol=$data['rol'];
$user->institucion=$data['institucion'];



$user->save();



return $confirmacion;




}else{

return 'no';

}




}


public function viewAdmin (){
	return view('layouts.admin');
}
    
}