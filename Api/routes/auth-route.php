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

Route::group([
    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers\Auth',
    'prefix' => 'v1/auth'
], function ($router) {
    
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
});

Route::group([
    // 'middleware' => ['auth:api'],
    'namespace' => 'App\Http\Controllers\Auth',
    'prefix' => 'v1/user'
], function ($router) {
    Route::get('index', 'UserCtrl@index');
    Route::post('store', 'UserCtrl@store');
    Route::put('update/{id}', 'UserCtrl@update');
    Route::delete('destroy/{id}', 'UserCtrl@destroy');
});

// Route::group([
//     'middleware' => 'api',
//     'namespace' => 'Permission',
//     'prefix' => 'v1/permission'
// ], function ($router) {
//     Route::get('index', 'PermissionCtrl@index');
//     Route::post('store', 'PermissionCtrl@store');
//     Route::put('update/{id}', 'PermissionCtrl@update');
//     Route::delete('destroy/{id}', 'PermissionCtrl@destroy');
// });