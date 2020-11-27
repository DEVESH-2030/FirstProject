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

Route::get('/user', 'UserAPIController@getUserAPI');
Route::post('/user', 'UserAPIController@create');
ROute::get('/user/{id}', 'UserAPIController@showbyid');
Route::put('useruptade/{id}', 'UserAPIController@update');
Route::delete('userdelete/{id}', 'UserAPIController@destroy');