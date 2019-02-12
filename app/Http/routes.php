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

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/tarefas', 'TarefasController@index');
Route::get('/tarefas/novo', 'TarefasController@create');
Route::post('/tarefas', 'TarefasController@store');

Route::get('/tarefas/apagar/{id}', 'TarefasController@destroy');
Route::get('/tarefas/editar/{id}', 'TarefasController@edit');
Route::post('/tarefas/{id}', 'TarefasController@update');
