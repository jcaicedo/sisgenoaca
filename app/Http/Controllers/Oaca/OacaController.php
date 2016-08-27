<?php

namespace App\Http\Controllers\Oaca;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OacaController extends Controller
{


	function getOaca(){
		return view('oaca.layouts.default');
	}



}
