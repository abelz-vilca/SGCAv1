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
Route::get('/acreditacion', 'PagesController@inicio')->name('acreditacion');

Route::get('/', function () {
    return view('layouts.plantilla');
});
Route::get('/inicio', function () {
    return view('welcome');
});
// ************************************************************************************
                // OTROS RUTAS DEL SISTEMA
// ************************************************************************************

Route::get('/programas', 'ProgramaController@create')->name('programa');

Route::get('/programas/{id}', ['as' => 'programadetalle', 'uses' => 'ProgramaController@editar']);


// *******************************************************************************************************
// *******************************************************************************************************





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
