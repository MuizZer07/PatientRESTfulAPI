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

        // Admin URLs
        Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {
            // Admin functions to add
            // see all users
            // add new permission
            // disable permission
            // add permission to user
            // create new user
            // edit user
            // delete user

        });

        // Patients API URLs
        Route::group(['prefix' => 'patients', 'as' => 'patients'], function () {
            Route::get('', 'PatientController@index');
            Route::get('/{patient}', 'PatientController@show');
            Route::post('', 'PatientController@store');
            Route::post('/batch_create', 'PatientController@batch_store');
            Route::put('/{patient}', 'PatientController@update');
            Route::put('/batch_update', 'PatientController@batch_update');
            Route::delete('/{patient}', 'PatientController@delete');
            Route::delete('/batch_delete', 'PatientController@batch_delete');
        });
    });

    // User Authentication URL
    Route::post('register', 'Auth\AuthenticationController@register');
    Route::post('login', 'Auth\AuthenticationController@login');
});

