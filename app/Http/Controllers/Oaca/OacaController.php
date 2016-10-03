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


	function viewOaca($id = 0){
		$oaca = RegistroOaca::find($id);

		$content_introduction = ElementsOaca::contentOaca(ElementsOaca::INTRODUCTION, $id);
		$collectChild_introduction =ElementsOaca::arrayContentChild(ElementsOaca::INTRODUCTION, $id);

		$content_develop = ElementsOaca::searchElementsDevelop($id);
		$content_close = ElementsOaca::searchElementsClose($id);
		//dd( $collectChild_introduction);
		return view('oaca.pages.oaca',[
			'oaca'=>$oaca,
			'collectChild_introduction' => $collectChild_introduction,
			"pattern_array" => ElementsOaca::DEVELOP_ARRAY,
			"content_develop" => $content_develop[2],	
			"pattern_array" => ElementsOaca::CLOSE_ARRAY,
			"content_close" => $content_close[2]
			]);
	}



}
