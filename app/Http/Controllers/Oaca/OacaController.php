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
		$oaca = RegistroOaca::find('0a90ec35-2ec7-3f31-a3e6-84c06d8e76fe');
		$content_introduction = ElementsOaca::contentOaca(ElementsOaca::INTRODUCTION, '0a90ec35-2ec7-3f31-a3e6-84c06d8e76fe');
		//dd($content_introduction);
		return view('oaca.pages.oaca',[
			'oaca'=>$oaca,
			'content_introduction' => $content_introduction,	
			]);
	}



}
