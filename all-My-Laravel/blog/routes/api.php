<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::resource('posts','Api\PostController');

Route::Apiresource('posts','Api\PostController');

Route::group([

			'prefix'=>'auth'
			
			],function(){
				Route::post('login','Api\AuthController@login');
				Route::post('signup','Api\AuthController@signup');
				Route::group([
								'middleware'=>'auth:api'
							],function(){
								Route::post('logout','Api\AuthController@logout');
									Route::get('user','Api\AuthController@user');
							}
						);

			}
		);