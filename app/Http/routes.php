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



Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware' => ['web','auth']],function(){

    Route::group(['prefix'=>'oaca'],function(){

        Route::get('registro',['as'=>'registro','uses' => 'GeneradorController@form_register']);
        Route::get('registro/create',['as'=>'registro','uses' => 'GeneradorController@form_register']);
        Route::post('registro/create',['as'=>'registro','uses'=>'GeneradorController@registro']);
       



        Route::group(['prefix'=>'objetos'],function(){
 			Route::post('create/preview',['as'=>'create/preview','uses'=>'GeneradorController@preview']);
            Route::get('create',['as'=>'create','uses'=>'GeneradorController@createOaca']);
            Route::post('create',['as'=>'create','uses'=>'GeneradorController@create_objetos']);


        });




    });




});

Route::get('usuario/registro/',['uses'=>'UserController@index']);
Route::post('usuario/registro/',['uses'=>'UserController@createUser']);
Route::get('usuario/admin',['uses'=>'UserController@viewAdmin']);

Route::resource('log','LogController');

Route::get('pruebas',['uses'=>'GeneradorController@pruebas']);
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
