<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'],function(){
  Route::auth();

  Route::get('/', 'HomeController@index');
  Route::get('/description-front', 'HomeController@getDescriptionFront');
  Route::get('/institutions-front', 'HomeController@getInstitutionsFront');
  Route::get('/contact-front', 'HomeController@getContactFront');
  // Route::controller('/', 'HomeController');

  Route::group(['middleware'=>'auth'],function(){

    Route::group(['namespace'=>'Admin','prefix'=>'admin'],function(){
      Route::get('/',['uses'=>'AdminController@index']);

      Route::group(['prefix'=>'oaca'],function(){
        //Controladores del Registro del OACA
        Route::get('registry/edit/{id}',['uses'=>'RegistryOacaController@getEdit']);
        Route::get('registry/{id}/delete','RegistryOacaController@delete')
        ->where(['id' => '[a-f0-9\-]+']);
        Route::controller('registry','RegistryOacaController');

        //Controladores de los elementos de los OACA
        Route::get('objetos/edit-introduction/{id}',['uses'=>'GeneradorController@getEditIntroduction']);
        Route::controller('objetos','GeneradorController');
      });

      Route::group(['prefix'=>'profesor','middleware'=>'usuarioProfesor'],function(){


      });
      Route::group(['prefix'=>'superadmin','middleware'=>'usuarioAdmin'],function(){
        Route::get('list-users',['uses'=>'AdminController@getListUsers']);
        Route::get('edit-user/{id}',['uses'=>'AdminController@getUserEdit']);
        Route::post('edit-user',['uses'=>'AdminController@postUserEdit']);

      });
    });


  });


  Route::group(['namespace'=>'Oaca','prefix'=>'oaca'],function(){
    Route::get('view/{id}',['uses'=>'OacaController@viewOaca']);
    Route::controller('/','OacaController');
  });
});

Route::get('usuario/registro/',['uses'=>'UsersController@index']);

Route::post('usuario/registro/',['uses'=>'UsersController@createUser']);

Route::get('usuario/admin',['uses'=>'UsersController@viewAdmin']);

Route::resource('log','LogController');


Route::get('/prueba', function () {
    return view('oaca.fullscreen_pageflip.layouts.main');
});
