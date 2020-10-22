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
    Route::get('/licencas', ['as' =>'licenca.lista','uses' => 'SessionContronller@licenca']);
    Route::get('/licencas/nova', ['as' =>'licenca.nova','uses' => 'SessionContronller@licencaNova']);
    Route::get('/licencas/ver', ['as' =>'licenca.ver','uses' => 'SessionContronller@licencaVer']);
});