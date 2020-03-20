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

// API: V1 Routes
Route::group(['prefix' => 'v1', 'as'=> 'v1'], function() {
    // Authenticated routes, api_token parameter should be given
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('logout', 'Auth\AuthenticationController@logout');

        Route::group(['prefix' => 'user', 'as' => 'user'], function () {
            Route::post('', 'Auth\AuthenticationController@getUser');
        });

        // Patients API URLs
        Route::group(['prefix' => 'patients', 'as' => 'patients'], function () {
            Route::get('', 'PatientController@index');
            Route::get('/{patient}', 'PatientController@show');
            Route::post('', 'PatientController@store');
            Route::put('/{patient}', 'PatientController@update');
            Route::delete('/{patient}', 'PatientController@delete');
        });
    });

    // User Authentication URL
    Route::post('register', 'Auth\AuthenticationController@register');
    Route::post('login', 'Auth\AuthenticationController@login');
});

