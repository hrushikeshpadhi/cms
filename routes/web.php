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

Route::get('/', function () {
   return view('login.login');
   // return view('welcome');
});

Route::match(['get','post'],'/fetchrole', 'RoleController@fetchrole')->name('login.fetchrole');

Auth::routes();
Route::group(['middleware' =>['auth']],function(){
           Route::get('/dashboard', 'HomeController@index');

           //user registration
			Route::get('/user-registration', 'RegistrationController@index');
			Route::post('/user-registration', 'RegistrationController@adduser');
			Route::get('/view-user', 'ViewuserController@viewUser');
			Route::match(['get','post'],'/edit-user/{id}', 'ViewuserController@editUser');

			//Assign job
			 Route::get('/add-job', 'JobController@index');
			 Route::post('/add-job', 'JobController@addjob');
             Route::get('/view-job', 'JobController@viewJob');
			 Route::get('/view-userjob', 'JobController@viewuserJob');
			 Route::get('/view-job/search','JobController@search');
			 Route::get('/view-job/download', 'JobController@download');
});
