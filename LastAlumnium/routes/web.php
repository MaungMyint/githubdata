<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::group([
	'prefix'=>'admin','as'=>'admin.','middleware'=>'is_admin'],
	function(){

        Route::get('import', 'ImportExcel\ImportExcelController@create');
        Route::get('delete', 'ImportExcel\ImportExcelController@destroy');
        Route::get('student', 'ImportExcel\ImportExcelController@student');
        Route::post('import-excel', 'ImportExcel\ImportExcelController@import');
        Route::get('import-excel', 'ImportExcel\ImportExcelController@index');
        Route::resource('import-excel', 'ImportExcel\ImportExcelController');
        Route::get('import', 'ImportExcel\ImportExcelController@create');
        Route::get('delete', 'ImportExcel\ImportExcelController@destroy');
        Route::get('student', 'ImportExcel\ImportExcelController@student');
        Route::resource('std', 'ImportExcel\ImportExcelController');
        Route::resource('mystd', 'ImportExcel\ImportExcelController');


        Route::get('course', 'ChartController@course');
        Route::get('slary', 'ChartController@slary');
        Route::get('jobp', 'ChartController@jobp');

        Route::get('jobl', 'ChartController@jobl');

        Route::get('sendemail','ImportExcel\MailController@email');
       Route::get('jobp', 'ChartController@jobp');

        Route::get('jobl', 'ChartController@jobl');       

        Route::get('staff', 'ChartController@staff');
        Route::get('state', 'ChartController@state');
        Route::get('university', 'ChartController@university');
        
        Route::view('profile', 'student.profile');
       });


Route::view('admin', 'admin/login.login');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('changePassword','HomeController@changePassword')->name('changePassword');
 Route::resource('changePassword', 'HomeController');

 Route::resource('/seekerprofile', 'ImportExcelStudentProfileController');

 //Route::get('/seekerprofile', 'ImportExcelStudentProfileController@index');
