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
		$references = $oaca::getReferences();

		$content_introduction = ElementsOaca::contentOaca(ElementsOaca::INTRODUCTION, $id);
		$collectChild_introduction =ElementsOaca::arrayContentChild(ElementsOaca::INTRODUCTION, $id);

		$content_develop = ElementsOaca::searchElementsDevelop($id);
		$content_motivation = ElementsOaca::searchElementsMotivation($id);
		$content_close = ElementsOaca::searchElementsClose($id);
		//dd( $collectChild_introduction);
		return view('oaca.pages.oaca',[
			'oaca'=>$oaca,
			'collectChild_introduction' => $collectChild_introduction,
			"pattern_array" => ElementsOaca::DEVELOP_ARRAY,
			"content_develop" => $content_develop[2],
			"pattern_array" => ElementsOaca::CLOSE_ARRAY,
			"content_close" => $content_close[2],
			"content_motivation" => $content_motivation[2],
			"references"=>$references

			]);
	}

	public function getElementsMoment (Request $request){

		$moment = $request->input('moment');

		$elements = ElementsOaca::where('moment',$moment)->get();

		return view('oaca.fullscreen_pageflip.partials.load_element_moment',[
			'moment'=> $moment
		]);

		// return response()->json([
		// 	'elements' => $elements
		// ]);
	}



}
