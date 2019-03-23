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

Route::resource('componentes', 'ControllerCrud');

Route::get('sendEmail', function () {
    $data= array(

        'name'=> "Ingreso no autorizado",

    );

Mail::send('emails.Alertas', $data, function ($message) {
    $message->from('pilotoautomatic151@gmail.com', '');
    $message->to('infoadsi151@gmail.com') -> subject("ingreso no autorizado ");
    
   
    return "Alerta enviada satifactoriamente";
});

});