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

//get List API product
Route::get('/listCardiganAPI', 'APIController@ListCardiganAPI');
Route::get('/listHoodieAPI', 'APIController@ListHoodieAPI');
Route::get('/listJacketAPI', 'APIController@ListJacketAPI');
Route::get('/listShirtAPI', 'APIController@ListShirtAPI');
Route::get('/listShoesAPI', 'APIController@ListShoesAPI');
Route::get('/listSweaterAPI', 'APIController@ListSweaterAPI');
Route::get('/listTshirtAPI', 'APIController@ListTshirtAPI');
