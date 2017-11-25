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
Route::resource('tasks', 'TasksController');
Route::get('/', function () {
    return view('welcome');
});
//Route::post('mueble','MuebleController');

Route::group(['middleware' => 'auth'], function() {

Route::get('formulario', 'StorageController@index');
Route::get('ambiente/{id}/informacion', 'MuebleController@ambiente');
Route::get('ambiente/{id}/Mueblecrear', 'MuebleController@create');
Route::get('mueble/{id}/Materialcrear', 'MaterialController@create');
Route::resource('mueble','MuebleController');
Route::get('material','MaterialController@store');
Route::resource('ambiente','AmbienteControler');
Route::resource('ambienteE','AmbienteControler@update');
Route::resource('crearA','AmbienteControler@index2');
Route::resource('eventos','CalendarioController');

    
});
Route::auth();

Route::get('/home', 'HomeController@index');
