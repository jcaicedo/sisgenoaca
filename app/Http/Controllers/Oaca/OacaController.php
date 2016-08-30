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
		$oaca = RegistroOaca::find('c23487c6-1de2-381d-a55c-d56a2f1cbd49');
		$content_introduction = ElementsOaca::contentOaca(ElementsOaca::INTRODUCTION, 'c23487c6-1de2-381d-a55c-d56a2f1cbd49');

		$content_develop = ElementsOaca::searchElementsDevelop('c23487c6-1de2-381d-a55c-d56a2f1cbd49');
		$content_close = ElementsOaca::searchElementsClose('c23487c6-1de2-381d-a55c-d56a2f1cbd49');

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
