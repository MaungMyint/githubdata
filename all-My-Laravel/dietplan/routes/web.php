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
Route::resource('ads','Admin\AdsController');
Route::get('main','MainController@index');
Route::get('/','UserdataController@create');
Route::get('userdata','UserdataController@index');
Route::resource('userdata','UserdataController');


Route::group([
	'prefix'=>'backend','as'=>'admin.','middleware'=>'is_admin'],
	function(){

 Route::resource('pro','Admin\ProductController');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
