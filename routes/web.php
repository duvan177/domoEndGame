<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contenido', function () {
    return view('contenido/contenido');
});

//CRUD COMPONENTES NICOLAS ROJAS
Route::resource('componentes', 'ControllerCrud');

// CONTROL COMPONENTES NICOLAS CHAMORRO
Route::resource('control','controllerControl');
Route::get('estados', 'atributoController@index');
Route::post('connect','atributoController@conectar');
Route::post('disconnect','atributoController@desconectar');
Route::post('aireAcondicionado','atributoController@aireAcondicionado');
Route::get('recargar', 'atributoController@recargarTable');