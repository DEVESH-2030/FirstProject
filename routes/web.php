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
/*--------------------------------
|--------   here use to desplay welcome page from view
*/
Route::get('/', function () {
    return view('welcome');
});
/*---------------*/

/*--------------------------------
|--------   here use to desplay login page from view
*/
Route::get('login', function(){
	return view('login');
});

Route::get('.login', function(){
	return view('user.login');
});

/*--------------------------------
|--------   here use to desplay master page from view
*/
Route::get('master', function(){
	return view('master');
});

// Route::get('user.create', function(){
// 	// return redirect()->route('user.create');
// 	return view('user.create');
// });
// Route::get('user.create', 'UserController@create');

Route::get('user', 'UserController@create');
// Route::get('create', 'UserController@create');
Route::post('user', 'UserController@store');

// Route::get('user', 'ApiController@create');
// Route::post('user', 'ApiController@store');
// {
// Route::get('/login', 'UserAPIController@index');
Route::get('/login', 'UserController@viewuser');
Route::get('/login', 'UserController@index');


/*----     Route for Create API Fetch, Insert, Update, Delete data from database  
|
|
*/	

Route::get('/user', 'UserAPIController@getUserAPI');

/*--   Insert Data into database   ---*/
Route::any('/user', 'UserAPIController@create');
// Route::get('user', 'UserAPIController@show');

/*--  Fetch data by User ID --*/
ROute::get('/user/{id}', 'UserAPIController@showbyid');

//---  Update Dta in database using by user id --
Route::put('useruptade/{id}', 'UserAPIController@update');

/*--   Use the data using by Delete method --*/

Route::delete('userdelete/{id}', 'UserAPIController@destroy');

// Route::get('/login' , 'UserAPIController@getUserAPI');
// Route::get('/login' , 'UserAPIController@showbyid');
// Route::get('/login' , 'UserAPIController@update');
// Route::get('/login' , 'UserAPIController@destroy');



