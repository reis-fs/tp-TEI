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
Route::get('/animal', 'AnimalController@index');

Route::get('/animal/create', 'AnimalController@create');

Route::post('/animal/store', 'AnimalController@store');

Route::get('/animal/edit/{id}', 'AnimalController@edit');

Route::post('/animal/update/{id}', 'AnimalController@update');

Route::get('/animal/excluir/{id}', 'AnimalController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
