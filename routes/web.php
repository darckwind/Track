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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/item','ItemController');
Route::resource('/lab','LaboratorioController');
Route::resource('/sede','SedeController');
Route::resource('/enc','Encargado');
Route::resource('/envlab','EnvioLabController');
Route::resource('/envsede','EnvioSedeController');
Route::resource('/envceo','EnvioCentroController');
Route::resource('/centro','CentroController');

//test

Route::get('etiqueta/lab','Planillas@laboratorio');
Route::get('etiqueta/sede','Planillas@sede');
