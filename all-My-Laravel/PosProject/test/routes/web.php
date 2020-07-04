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

Route::resource('/post','PostController');
Route::resource('/login','ItemController');
Route::resource('/item','ItemController');
Route::post('/getcode','ItemController@getcode');
Route::resource('/additem','AddItemController');
Route::resource('/sale','SaleController');/*
Route::resource('/receipt','ReceiptController');*/
Route::resource('/discount','DiscountController');
Route::resource('/report','ReportController');

Route::group(['prefix'=>'admin',
			'as' => 'admin.'],
	function(){
		Route::resource('/category','CategoryController');
		Route::resource('/item','ItemController');
		Route::resource('/receipt','ReceiptController');
});
Auth::routes();

Route::get('/home','HomeController@index')->name('home');
