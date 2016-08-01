<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class AdminController extends Controller
{
    //

	public function __construct(){

		view()->share([
			'prueba'=>session('prueba'),
			]);

	}

	function index (){
		session(['prueba' => 'prueba']);

		return view('admin.oaca.dashboard.dashboard');

	}
}
