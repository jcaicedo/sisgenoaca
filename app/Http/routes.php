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

    Route::get('/home', 'HomeController@index');


    Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware' => ['auth']],function(){

        Route::get('/',['uses'=>'AdminController@index']);
        

        Route::group(['prefix'=>'oaca'],function(){

            Route::controller('register','GeneradorController');
            Route::controller('registry','RegistryOacaController');
            Route::controller('objetos','GeneradorController');

            Route::post('registro/create',['as'=>'registro','uses'=>'GeneradorController@registro']);

        });

    });

    




});

Route::get('usuario/registro/',['uses'=>'UsersController@index']);
Route::post('usuario/registro/',['uses'=>'UsersController@createUser']);
Route::get('usuario/admin',['uses'=>'UsersController@viewAdmin']);

Route::resource('log','LogController');

Route::get('pruebas',['uses'=>'GeneradorController@pruebas']);
/*
Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/home', 'HomeController@index');
});*/
