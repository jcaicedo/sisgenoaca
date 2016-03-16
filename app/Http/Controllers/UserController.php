<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(){
    return view('users.create');
}

public function registerUser(Request $request){

    User::create([
        'first_name'=>$request['first_name'],
        'last_name'=>$request['last_name'],
        'email'=>$request['email'],
        'password'=>bcrypt($request['password']),
        'institucion'=>$request['institucion']
    ]);

}
	
}
