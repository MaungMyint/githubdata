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
/*eicho*/

Route::get('/','ForntController@index');
Route::resource('/post','PostController');
// Route::resource('/login','ItemController');
Route::resource('/item','ItemController');
Route::resource('/additem','AddItemController');
Route::resource('/sale','SaleController');
Route::resource('/receipt','ReceiptController@index');
Route::resource('/discount','DiscountController');
Route::resource('/report','ReportController');
Route::post('/getcode','ItemController@getcode');
Route::post('/getprofit','SaleController@profit');

Route::group(['prefix'=>'admin',
			'as' => 'admin.'],
	function(){
		Route::resource('/category','CategoryController');
		Route::resource('/unit','UnitController');
		Route::resource('/item','ItemController');
		Route::resource('/receipt','ReceiptController@index');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


