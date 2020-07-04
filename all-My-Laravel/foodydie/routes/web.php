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

		Route::resource('/','PostController');
		Route::resource('/buffy','BuffayController');
		Route::resource('/cafe','CafeController');
		Route::group([
	'prefix'=>'backend','as'=>'admin.','middleware'=>'is_admin'],
	function(){

		Route::get('/','AdminController@index');
		Route::get('/shop','backend\ShopController@index');
		Route::resource('/shop','backend\ShopController');
		Route::resource('/category','backend\CategoryController');

		
});

		Auth::routes();
