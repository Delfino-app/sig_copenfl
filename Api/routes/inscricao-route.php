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
    'namespace' => 'App\Http\Controllers\Inscricao',
], function ($router) { 
    /*
        tipo: licenca ou carteria
        inscricao_id: id da inscricao em funcao no modelo
     */
    Route::get('/{tipo}/documentos-faltando/{inscricao_id}', 'DocumentosAcademicosCtrl@documentos_faltando');
  /*
        tipo: licenca ou carteria
        inscricao_id: id da inscricao em funcao no modelo
     */
     Route::get('/{tipo}/documentos-entregues/{inscricao_id}', 'DocumentosAcademicosCtrl@documentos_entregues');

     /*
        tipo: licenca ou carteria
     */
    Route::get('/{tipo}/todos-documentos/{inscricao_id}', 'DocumentosAcademicosCtrl@index_documentos');
    Route::post('documentos/store', 'DocumentosAcademicosCtrl@store');
    Route::post('documentos/update', 'DocumentosAcademicosCtrl@update');
    Route::delete('destroy/{id}', 'DocumentosAcademicosCtrl@destroy');
});

Route::group([
    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers\Inscricao',
], function ($router) { 
    Route::get('index', 'PermissionCtrl@index');
    Route::post('store', 'PermissionCtrl@store');
    Route::put('update/{id}', 'PermissionCtrl@update');
    Route::delete('destroy/{id}', 'PermissionCtrl@destroy');
});