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
Route::get('muebleInfo/{id}', 'MuebleController@informacionm');
Route::get('mueblemover/{id}', 'MuebleController@mover');
Route::get('movermueble/{id}', 'MuebleController@moverlist');
Route::get('Material/{id}/crear', 'MaterialAgregarController@create');

Route::resource('mueble','MuebleController');
Route::get('material','MaterialController@store');
Route::resource('ambiente','AmbienteControler');
Route::resource('crearA','AmbienteControler@index2');
Route::resource('eventos','CalendarioController');
Route::resource('material','MaterialController');
Route::resource('Mueblemover','MoverMuebleController');
Route::resource('Usuarios','MensajeController');
Route::resource('Reserva','MensajeController@index2');
Route::resource('componente','MaterialAgregarController');





    
});
Route::auth();

Route::get('/home', 'HomeController@index');
