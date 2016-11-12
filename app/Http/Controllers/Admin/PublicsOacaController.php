<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\PublicsOaca;


class PublicsOacaController extends Controller
{
  public function getStatus($status,$id_registry){

    $resgiter_status = PublicsOaca::firstOrCreate(['register_id'=>$id_registry]);
    $resgiter_status->status = $status=="true"?"1":"0";
    $resgiter_status->save();

    return $resgiter_status;

  }
}
