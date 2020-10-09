<?php

use Illuminate\Http\Request;

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
Route::get('/municipios',['as' => 'api.municipios','uses' => 'Municipio\MunicipioController@municipiosAll']);

Route::get('/municipios/{id_provincia}',['as' => 'api.municipios.provincia','uses' => 'Municipio\MunicipioController@municipiosProvincia']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
