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
		$oaca = RegistroOaca::find('b4fa32b2-ba04-36bd-90c8-8d178e2b1521');
		$content_introduction = ElementsOaca::contentOaca(ElementsOaca::INTRODUCTION, 'b4fa32b2-ba04-36bd-90c8-8d178e2b1521');

		$content_develop = ElementsOaca::searchElementsDevelop('b4fa32b2-ba04-36bd-90c8-8d178e2b1521');
		$content_close = ElementsOaca::searchElementsClose('b4fa32b2-ba04-36bd-90c8-8d178e2b1521');

		return view('oaca.pages.oaca',[
			'oaca'=>$oaca,
			'content_introduction' => $content_introduction,
			"pattern_array" => ElementsOaca::DEVELOP_ARRAY,
			"content_develop" => $content_develop,	
			"pattern_array" => ElementsOaca::CLOSE_ARRAY,
			"content_close" => $content_close
			]);
	}



}
