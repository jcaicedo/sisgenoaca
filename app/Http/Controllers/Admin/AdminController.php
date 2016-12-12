<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\Roles;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
    //

	public function __construct(){

		view()->share([
			'prueba'=>session('prueba'),
			]);

	}

	function index (){


		return view('admin.oaca.dashboard.dashboard');

	}

	public function getListUsers(){

		$myuser = Auth::user()->id;
		$users = Users::whereNotIn('id',[$myuser])->get();

		return view('admin.administrator.list-user',['users'=>$users]);
	}

	public function getUserEdit($id){
		$user = Users::find($id);
		return view('auth.edit_users',[
			'user'=>$user
		]);
	}

	public function postUserEdit(Request $request){

		$user = Users::find($request->input('id_user'));
		$user->name = $request->input('name');
		$user->username = $request->input('username');
		$user->email = $request->input('email');
		$user->save();

		return redirect('/admin/superadmin/list-users')->with('status','Usuario Editado');
	}
}
