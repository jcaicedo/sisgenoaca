<?php

namespace App\Http\Controllers\Oaca;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\RegistroOaca;
use App\Models\ElementsOaca;

class OacaController extends Controller
{


	function getOaca(){
		$oaca = RegistroOaca::find('0ac02fbc-4136-3615-acb8-2d1f918d4e9c');
		$content_introduction = ElementsOaca::contentOaca(ElementsOaca::INTRODUCTION, '0ac02fbc-4136-3615-acb8-2d1f918d4e9c');
		
		return view('oaca.pages.oaca',[
			'oaca'=>$oaca,
			'content_introduction' => $content_introduction,	
			]);
	}



}
