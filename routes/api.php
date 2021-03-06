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

Route::post('registeruser','RegisterController@store')->name('register.store');

Route::group(['middleware' => 'auth:api'], function () {
    Route::patch('profile','ProfileController@store')->name('profile.store');
    Route::get('profile','ProfileController@show')->name('profile.show');
});