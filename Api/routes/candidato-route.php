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
    Route::get('index/{tipo}/{estado}/{data_inicio?}/{data_fim?}', 'CandidatoCtrl@listado_pelo_tipo');
    // Route::get('index/{data_inicio?}/{data_fim?}', 'CandidatoCtrl@index');
    Route::post('store/licenca', 'CandidatoCtrl@store_licenca');
    Route::post('store/carteira', 'CandidatoCtrl@store_carteira');
    Route::get('/{tipo}/show/{id}', 'CandidatoCtrl@show');
    Route::put('update/{id}', 'CandidatoCtrl@update');
    Route::delete('destroy/{id}', 'CandidatoCtrl@destroy')->middleware("role:Presidente");
});