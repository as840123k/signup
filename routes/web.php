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
Route::pattern('id', '[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ActionController@index');
//建立首頁
Route::get('/action', 'ActionController@index')->name('action.index');
//建立活動表單
Route::get('/action/create', 'ActionController@create')->name('action.create');

Route::post('/action', 'ActionController@store')->name('action.store');

Route::get('/action', 'ActionController@index')->name('action.index');

Route::get('/action/{id}', 'ActionController@show')->name('action.show');

Route::get('/action/{id}/edit', 'ActionController@edit')->name('action.edit');

Route::patch('/action/{id}', 'ActionController@update')->name('action.update');
