<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Start Session
Route::group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    
    //Default
    Route::get('/', 'SessionContronller@index');
    Route::get('/login', ['as' =>'login','uses' => 'SessionContronller@index']);



    //Others
    Route::get('/session', 'SessionContronller@start');
    Route::post('/session', 'SessionContronller@start');
    Route::get('/logout', ['as' =>'login.sair','uses' => 'SessionContronller@logout']);
    Route::get('/dashboard', ['as' =>'home','uses' => 'SessionContronller@home']);
    //Licencas 
    Route::get('/licencas', ['as' =>'licenca.lista','uses' => 'SessionContronller@licenca']);
    Route::get('/licencas/nova', ['as' =>'licenca.nova','uses' => 'SessionContronller@licencaNova']);
    Route::get('/licencas/feito/{id}', ['as' =>'licenca.feito','uses' => 'SessionContronller@licencaAdded']);
    Route::get('/licencas/add/docs/{id}', ['as' =>'licenca.add.documentos','uses' => 'SessionContronller@AddDoc']);
    Route::get('/licencas/ver/{id}', ['as' =>'licenca.ver','uses' => 'SessionContronller@licencaVer']);
    Route::get('/licencas/editar/{id}', ['as' =>'licenca.editar','uses' => 'SessionContronller@editLicenca']);
    Route::get('/licencas/eliminar/{id}', ['as' =>'licenca.eliminar','uses' => 'SessionContronller@deleteLicenca']);

    //Carteiras
    Route::get('/carteiras', ['as' =>'carteira.lista','uses' => 'SessionContronller@carteira']);
    Route::get('/carteiras/nova', ['as' =>'carteira.nova','uses' => 'SessionContronller@carteiraNova']);
    Route::get('/carteiras/ver/{id}', ['as' =>'carteira.ver','uses' => 'SessionContronller@carteiraVer']);
    Route::get('/carteiras/eliminar/{id}', ['as' =>'carteira.eliminar','uses' => 'SessionContronller@deleteCarteira']);
    Route::get('/carteiras/feito/{id}', ['as' =>'carteira.feito','uses' => 'SessionContronller@carteiraAdded']);
    Route::get('/carteiras/add/docs/{id}', ['as' =>'carteira.add.documentos','uses' => 'SessionContronller@AddDoc']);



    //Recibo
    Route::get('/recibo/{id}', ['as' =>'recibo','uses' => 'SessionContronller@recibo']);
    
    //Pesquisa
    Route::post('/pesquisa', ['as' =>'pesquisa.processo','uses' => 'SessionContronller@pesquisaProcesso']);
    
    //Suporte
    Route::post('/ajuda', ['as' =>'suporte.ajuda','uses' => 'SessionContronller@suporte']);




});