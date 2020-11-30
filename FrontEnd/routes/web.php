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
    
    #=======SessionContronller========#
    Route::get('/', 'SessionContronller@index');
    Route::get('/login', ['as' =>'login','uses' => 'SessionContronller@index']);
    Route::get('/session', 'SessionContronller@start');
    Route::post('/session', 'SessionContronller@start');
    Route::get('/sessionAddLicenca', 'SessionContronller@sessionAddLicenca');
    Route::get('/logout', ['as' =>'login.sair','uses' => 'SessionContronller@logout']);

    #=======HelpersController========#
    Route::get('/dashboard', ['as' =>'home','uses' => 'HelpersController@home']);
    Route::get('/adDocs/{id}', ['as' =>'add.documentos','uses' => 'HelpersController@AddDoc']);
    Route::get('/recibo/{id}', ['as' =>'recibo','uses' => 'HelpersController@recibo']);
    Route::post('/pesquisa', ['as' =>'pesquisa.processo','uses' => 'HelpersController@pesquisaProcesso']);
    Route::post('/ajuda', ['as' =>'suporte.ajuda','uses' => 'HelpersController@suporte']);

    #=======LicencaController========#
    Route::get('/licencas', ['as' =>'licenca.lista','uses' => 'LicencaController@index']);
    Route::get('/licencas/nova', ['as' =>'licenca.nova','uses' => 'LicencaController@licencaNova']);
    Route::get('/licencas/feito/{id}', ['as' =>'licenca.feito','uses' => 'LicencaController@licencaAdded']);
    Route::get('/licencas/ver/{id}', ['as' =>'licenca.ver','uses' => 'LicencaController@licencaVer']);
    Route::get('/licencas/editar/{id}', ['as' =>'licenca.editar','uses' => 'LicencaController@editLicenca']);
    Route::get('/licencas/eliminar/{id}', ['as' =>'licenca.eliminar','uses' => 'LicencaController@deleteLicenca']);
    Route::get('/licenca/nova/adds/{id}', ['as' =>'registro.etapa.final','uses' => 'LicencaController@licencaDocsPagamentos']);

    #=======CarteiraController========#
    Route::get('/carteiras', ['as' =>'carteira.lista','uses' => 'CarteiraController@index']);
    Route::get('/carteiras/nova', ['as' =>'carteira.nova','uses' => 'CarteiraController@carteiraNova']);
    Route::get('/carteiras/ver/{id}', ['as' =>'carteira.ver','uses' => 'CarteiraController@carteiraVer']);
    Route::get('/carteiras/eliminar/{id}', ['as' =>'carteira.eliminar','uses' => 'CarteiraController@deleteCarteira']);
    Route::get('/carteiras/feito/{id}', ['as' =>'carteira.feito','uses' => 'CarteiraController@carteiraAdded']);
    
    #=======PagamentosController========#
    Route::get('/pagamentos', ['as' =>'pagamentos','uses' => 'PagamentosController@pagamentos']);
    Route::post('/pagamentos', ['as' =>'pagamento.find','uses' => 'PagamentosController@pagamentosCandidato']);
    Route::post('/pagamentos/add', ['as' =>'pagamento.post','uses' => 'PagamentosController@pagamentosPost']);
    Route::get('/pagamentos/{id}', ['as' =>'pagamento.dados','uses' => 'PagamentosController@pagamentosDadosCandidato']);
});