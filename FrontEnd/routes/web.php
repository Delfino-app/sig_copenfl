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
    Route::get('/login', 'SessionContronller@index');



    //Others
    Route::get('/session', 'SessionContronller@start');
    Route::post('/session', 'SessionContronller@start');
    Route::get('/logout', ['as' =>'login.sair','uses' => 'SessionContronller@logout']);
    Route::get('/home', ['as' =>'home','uses' => 'SessionContronller@home']);
    //Licencas 
    Route::get('/licencas', ['as' =>'licenca.lista','uses' => 'SessionContronller@licenca']);
    Route::get('/licencas/nova', ['as' =>'licenca.nova','uses' => 'SessionContronller@licencaNova']);
    Route::get('/licencas/feito', ['as' =>'licenca.feito','uses' => 'SessionContronller@licencaAdded']);
    Route::get('/licencas/add/docs', ['as' =>'licenca.add.documentos','uses' => 'SessionContronller@licencaAddDoc']);
    Route::get('/licencas/ver/{id}', ['as' =>'licenca.ver','uses' => 'SessionContronller@licencaVer']);
    Route::get('/licencas/editar/{id}', ['as' =>'licenca.editar','uses' => 'SessionContronller@licencaVer']);
    Route::get('/licencas/eliminar/{id}', ['as' =>'licenca.eliminar','uses' => 'SessionContronller@licencaVer']);
});