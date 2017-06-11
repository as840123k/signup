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
//儲存
Route::post('/action', 'ActionController@store')->name('action.store');

Route::get('/action', 'ActionController@index')->name('action.index');

Route::get('/action/{id}', 'ActionController@show')->name('action.show');

Route::get('/action/{id}/edit', 'ActionController@edit')->name('action.edit');
//修改
Route::patch('/action/{id}', 'ActionController@update')->name('action.update');
//刪除
Route::delete('/action/{id}', 'ActionController@destroy')->name('action.destroy');

Route::get('/signup/create/{id}', 'SignupController@create')->name('signup.create');
//儲存報名資料
Route::post('/signup', 'SignupController@store')->name('signup.store');

/*活動，群組路由，符合action規範的可以只寫這行
Route::resource('action', 'ActionController');

//報名
Route::group(['prefix' => 'signup'], function () {
//建立報名資料
Route::get('/create/{id}', 'SignupController@create')->name('signup.create');

//儲存報名資料
Route::post('/', 'SignupController@store')->name('signup.store');
});*/
