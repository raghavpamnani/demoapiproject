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
Route::post('addCar', 'apiController@addCar');
Route::post('addCar', 'apiController@addCar');
Route::post('manufacturer', 'apiController@addManufacturer');
Route::get('get-manufacturer', 'apiController@getManufacturer');
Route::post('model', 'apiController@storeModel');
Route::get('get-iventory', 'apiController@view_iventory');
