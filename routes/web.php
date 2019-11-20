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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', ['as'=>'login','uses'=>'LoginController@index']);
Route::post('/',['as'=>'login_session','uses'=>'LoginController@login']);
Route::post('/logout',['as'=>'logout','uses'=>'LoginController@logout']);


Route::group(['prefix' => 'registrar'], function (){
	Route::get('/registrar', ['as'=>'registrar_usuario','uses'=>'AlumnoController@index']);
	Route::post('/agregar',['as'=> 'registrar_guardar','uses'=>'AlumnoController@add']);
});



Route::get('/dashboard', ['as'=>'dashboard','uses'=>'DashboardController@index']);

Route::group(['prefix' => 'prueba'], function (){
	Route::get('/',['as'=> 'test_vista','uses'=>'TestController@vista']);
	Route::get('/vista',['as'=> 'test_view','uses'=>'TestController@index']);
	Route::post('/agregar',['as'=> 'prueba_guardar','uses'=>'TestController@guardar']);
});

Route::group(['prefix' => 'historial'], function (){
	Route::get('/',['as'=> 'historial_vista','uses'=>'TestController@mostrar']);
	
});

Route::group(['prefix' => 'cita'], function (){
	Route::get('/',['as'=> 'cita_vista','uses'=>'TestController@cita']);
	
});
