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

Route::get('/home', 'HomeController@index')->name('contenido');

Route::get('/contenido', function () {
    return view('contenido/contenido');
});

//CRUD COMPONENTES NICOLAS ROJAS
Route::resource('componentes', 'ControllerCrud');
Route::put('componentes/{id}','ControllerCrud@update');
Route::delete('componentes/{id}','ControllerCrud@destroy');
// CONTROL COMPONENTES NICOLAS CHAMORRO
Route::resource('control','controllerControl');
Route::get('estados', 'atributoController@index');
Route::post('connect','atributoController@conectar');
Route::post('disconnect','atributoController@desconectar');
Route::post('aireAcondicionado','atributoController@aireAcondicionado');
Route::get('recargar', 'atributoController@recargarTable');



Route::get('sendEmail', function () {
    $data= array(

        'name'=> "Ingreso no autorizado",

    );

Mail::send('emails.Alertas', $data, function ($message) {
    $message->from('pilotoautomatic151@gmail.com', '');
    $message->to('pilotoautomatic151@gmail.com') -> subject("ingreso no autorizado ");
    
   
    return "Alerta enviada satifactoriamente";
});

});

//perfiles Felipe Estrada
/*route::get('/perfildele{perfil}/destroy',[
'uses'=>'PerfilController@destroy',
'as'=>'perfildelete'

]);*/

route::resource('perfil','PerfilController');
Route::delete('/perfildele/{perfil}', 'PerfilController@destroy');
