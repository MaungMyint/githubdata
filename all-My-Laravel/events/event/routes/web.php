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

Route::resource('/booklist','BooklistController');
Route::get('/mail','MailController@index');
Route::post('send/email','MailController@sendemail');
Route::resource('/','PostController');
Route::resource('/floral','FloralController');
Route::resource('/wedding','WeddingController');
Route::resource('/party','PartyController');
Route::resource('/detail','DetailController');
Route::resource('/showcart','ShowcartController');
Route::resource('/eventpackage','EventController');
Route::group([
	'prefix'=>'backend','as'=>'admin.','middleware'=>'is_admin'],
	function(){
		Route::resource('/category','backend\CategoryController');
		Route::resource('/organizer','backend\OrganizerController');
		Route::resource('/service','backend\ServiceController');
		Route::resource('/venue','backend\VenuesController');
		Route::resource('/package','backend\PackageController');
		Route::resource('/event','backend\EventController');
		Route::resource('/eventshow','backend\EventshowController');
		Route::get('/','AdminController@index');

		
});



Auth::routes();

