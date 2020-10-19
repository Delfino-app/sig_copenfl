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
    'middleware' => ['auth:api'],
    'namespace' => 'App\Http\Controllers\Candidato',
], function ($router) { 
    Route::get('index', 'CandidatoCtrl@index');
    Route::post('store', 'CandidatoCtrl@store');
    Route::get('show/{id}', 'CandidatoCtrl@show');
    Route::put('update/{id}', 'CandidatoCtrl@update');
    Route::delete('destroy/{id}', 'CandidatoCtrl@destroy')->middleware("role:Presidente");
});