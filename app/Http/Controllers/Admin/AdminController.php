<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Users;
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


		return view('admin.oaca.dashboard.dashboard');

	}

	public function getListUsers(){

	}
}
