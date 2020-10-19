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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'middleware' => ['api'],
    'prefix' => 'asset',

], function ($router) {
    Route::get('municipios', function(){
        return response()->json([
            "status" => "Ok",
            "municipios" => App\Models\Candidato\municipios::all()
            ]);
    });
    Route::get('municipios/{provincia_id}', function($provincia_id){
        return response()->json([
            "status" => "Ok",
            "municipios" => App\Models\Candidato\municipios::where("provincia_id","=", $provincia_id)->get()
            ]);
    });
    Route::get('provincias', function(){
        return response()->json([
            "status" => "Ok",
            "provincias" => App\Models\Candidato\provincias::all()
            ]);
    });
    Route::get('provincias/{pais_id}', function($pais_id){
        return response()->json([
            "status" => "Ok",
            "provincias" => App\Models\Candidato\provincias::where("pais_id","=", $pais_id)->get()
            ]);
    });
    Route::get('paises', function(){
        return response()->json([
            "status" => "Ok",
            "paises" => App\Models\Candidato\paises::all()
            ]);
    });
    Route::get('paises-provincias-municipios', function(){
        return response()->json([
            "status" => "Ok",
            "paises" => App\Models\Candidato\paises::all(),
            "provincias" => App\Models\Candidato\provincias::all(),
            "municipios" => App\Models\Candidato\municipios::all(),
            ]);
    });
});