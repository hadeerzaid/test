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
Route::group(['middleware' => 'guest:api', 'namespace' => 'API'], function () {
    Route::post('login', 'AuthController@login'); //admin@test.com ->email password admin123
    Route::post('register', 'AuthController@register'); //admin@test.com ->email password admin123
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
