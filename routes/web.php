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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    $name = '使用者 ';
    $say  = '嗨！';
    $date = date('Y年m月d日');
    return view('welcome', compact('name', 'say', 'date'));
});
//建立首頁
Route::get('/action', 'ActionController@index')->name('action.index');
//建立活動表單
Route::get('/action/create', 'ActionController@create')->name('action.create');

Route::post('/action', 'ActionController@store')->name('action.store');
