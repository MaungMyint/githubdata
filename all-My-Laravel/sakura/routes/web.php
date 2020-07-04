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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group([
	'prefix' => 'admin'],
	function(){
		Route::get('/','Backend\UserController@index');
		Route::resource('/product','Backend\ProductController');
		Route::resource('/user','Backend\UserController');
		Route::resource('/category','Backend\CategoryController');
		Route::resource('/userdetail','Backend\UserDetailController');
		Route::resource('/order','Backend\OrderController');
		Route::resource('/price','Backend\PriceController');
	});

Route::group([
	'prefix' => 'head'],
	function(){
		
		Route::resource('/user','Head\UserController');
		Route::resource('/order','Head\OrderController');
		Route::resource('/orderReturn','Head\OrderReturnController');
		Route::resource('/orderRequest','Head\OrderRequestController');
		// Route::resource('/orderRemark','Head\OrderRemarkController');
		Route::post('/returnDetail','Head\OrderReturnController@returnDetail');
		Route::post('/getItemCount','Head\OrderRequestController@getItemCount');
		Route::get('/dashboard','Head\DashboardController@index');
	});



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/',function(){
	return view('frontend/main');
});
Route::get('/homes',function(){
	return view('frontend/main');
});
Route::get('/about',function(){
	return view('frontend/about');
});
Route::get('/order',function(){
	return view('frontend/order');
});
Route::get('/lotion',function ()
{
	return view("frontend/lotion");
});
Route::get('/serum',function ()
{
	return view("frontend/serum");
});
Route::get('/soap',function ()
{
	return view("frontend/soap");
});
Route::get('/scrub',function ()
{
	return view("frontend/scrub");
});
Route::get('/mask',function ()
{
	return view("frontend/mask");
});
Route::get('/collagen',function ()
{
	return view("frontend/collagen");
});
Route::get('/contact',function ()
{
	return view("frontend/contact");
});

