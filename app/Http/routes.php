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



Route::group(['prefix'=>'app','middleware' => ['web']],function(){

    Route::group(['prefix'=>'oaca'],function(){

        Route::get('registro',['as'=>'registro','uses' => 'GeneradorController@form_register']);
        Route::post('registro',['as'=>'registro','uses'=>'GeneradorController@registro']);

        Route::get('objetivos',['as'=>'create','uses'=>'GeneradorController@objetivos']);



    });




});