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
		$oaca = RegistroOaca::find('97587fc7-35f2-30de-8ffa-b12e3f62b944');
		$content_introduction = ElementsOaca::contentOaca(ElementsOaca::INTRODUCTION, '97587fc7-35f2-30de-8ffa-b12e3f62b944');

		$content_develop = ElementsOaca::searchElementsDevelop('97587fc7-35f2-30de-8ffa-b12e3f62b944');
		$content_close = ElementsOaca::searchElementsClose('97587fc7-35f2-30de-8ffa-b12e3f62b944');

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
