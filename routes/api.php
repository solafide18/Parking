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

Route::get('/token/auth','TokenController@auth');
Route::get('/users/{id}','UsersController@get');
Route::post('/users','UsersController@post');
Route::put('/users','UsersController@put');
Route::delete('/users','UsersController@delete');
