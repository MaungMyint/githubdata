 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/','PostController@index');
Route::get('/detail','PageController@detail');
Route::resource('/post','PostController');
/*for bacekend for two part*/

Route::resource('/comment','CommentPostController');
Route::resource('/profile','ProfileController');


Route::group(['prefix'=>'backend',
			'as' => 'admin.',
			'middleware'=>'is_admin'
],
			function(){
				Route::resource('/post','Backend\PostController');
				Route::resource('/category','Backend\Categorycontroller');

				Route::resource('/user','Backend\UserController');
			});

				





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







