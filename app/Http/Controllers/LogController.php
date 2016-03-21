<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use App\Http\Requests\LoginRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LogController extends Controller
{
    public function index(){
    	return view('users.login');
    }

    public function store(LoginRequest $request){

    	if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
    		return Redirect::to('app/oaca/objetos/create');
    	}
    	Session::flash('message-error','Datos incorrectos');
    	return Redirect::to('log');
    }
}
