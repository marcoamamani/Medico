<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

Route::get('/ejemplo', function () {
    return view('index');
});
Route::group(['middleware' => 'auth'], function () {
Route::get('/',['as'=>'/','uses'=>'AdminController@index']);
Route::get('/medicosrec',['as'=>'/medicosrec','uses'=>'AdminController@medicosrec']);
Route::get('/citasprog',['as'=>'/citasprog','uses'=>'AdminController@citasprog']);
Route::post('/regpacientes','PacientesController@registrar');
Route::get('/calendario','AdminController@calendario');
});
Route::get('login', function () {
    return view('login');
});
