<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\RegistroOaca;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $registrys = RegistroOaca::where("status_public","1")->get();
        return view('front.home.index',[
          'registrys' => $registrys
        ]);
    }

    public function getLogout()
    {
       $this->auth->logout();
       Session::flush();
       return redirect('/admin/oaca/objetos/create');
   }

   public function getDescriptionFront(){
     return view('front.description.description');
   }
   public function getInstitutionsFront(){
     return view('front.institutions-pilot.institutions');
   }
}
