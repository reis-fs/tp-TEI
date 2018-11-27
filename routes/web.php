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
Route::get('/animal', 'AnimalController@index')->middleware('auth');

Route::get('/animal/create', 'AnimalController@create')->middleware('auth');

Route::post('/animal/store', 'AnimalController@store')->middleware('auth');

Route::get('/animal/edit/{id}', 'AnimalController@edit')->middleware('auth');

Route::post('/animal/update/{id}', 'AnimalController@update')->middleware('auth');

Route::get('/animal/excluir/{id}', 'AnimalController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
