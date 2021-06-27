<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::post('register', 'AuthenticateController@register');
    Route::post('login', 'AuthenticateController@login');
    Route::post('logout', 'AuthenticateController@logout');
    Route::post('refresh', 'AuthenticateController@refresh');
    Route::get('profile', 'AuthenticateController@profile');
});
