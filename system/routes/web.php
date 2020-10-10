<?php

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

Route::get('/',['as' => 'home','uses' => 'Site\LoginController@index']);
Route::get('/login',['as' => 'login','uses' => 'Site\LoginController@index']);
Route::get('/login/sair',['as' => 'login.sair','uses' => 'Site\LoginController@sair']);
Route::post('/login/entrar',['as' => 'login.entrar','uses' => 'Site\LoginController@entrar']);


//Protegendo as Rotas com Middleware
Route::group(['middleware' => 'auth'],function(){

	Route::get('/home',['as' => 'home.inicio', 'uses' => 'Home\HomeController@index']);
	Route::get('/processos/novo',['as' => 'processos.novo', 'uses' => 'ProcessoController@novo']);
	Route::get('/inscricoes',['as' => 'processos.lista', 'uses' => 'ProcessoController@lista']);
	Route::post('/inscricoes/novo',['as' => 'prosesso.adicionar', 'uses' => 'ProcessoController@adicionar']);

	Route::get('/processos/feito/{id}',['as' => 'processo.feito', 'uses' => 'ProcessoController@feito']);

	Route::get('/processos/recibo/{id}',['as' => 'processo.recibo', 'uses' => 'ProcessoController@recibo']);

	Route::get('/home',['as' => 'home.inicio', 'uses' => 'Home\HomeController@index']);

	//Licença
	Route::get('/licenca',['as' => 'licenca', 'uses' => 'Licenca\LicencaController@index']);
	Route::get('/licenca/nova',['as' => 'licenca.nova', 'uses' => 'Licenca\LicencaController@nova']);
	Route::post('/licenca/nova',['as' => 'licenca.nova', 'uses' => 'Licenca\LicencaController@adicionar']);

	//Licença -> Actions
	Route::get('/licenca/feito/{id}',['as' => 'licenca.fichaFeito', 'uses' => 'Licenca\LicencaController@feito']);
	Route::get('/licenca/recibo/{id}',['as' => 'licenca.recibo', 'uses' => 'Licenca\LicencaController@recibo']);
	Route::get('/licenca/ver/{id}',['as' => 'licenca.ver', 'uses' => 'Licenca\LicencaController@ver']);

	Route::post('/licenca/documentos/{id}',['as' => 'licenca.documentos', 'uses' => 'Licenca\LicencaController@adicionar']);

	Route::post('/licenca/editar/{id}',['as' => 'licenca.editar', 'uses' => 'Licenca\LicencaController@adicionar']);

	Route::post('/licenca/eliminar/{id}',['as' => 'licenca.eliminar', 'uses' => 'Licenca\LicencaController@adicionar']);


	//Carteira
	Route::get('/carteira',['as' => 'carteira', 'uses' => 'Licenca\LicencaController@index']);

	/*Route::get('/admin/cursos/adicionar',['as' => 'admin.cursos.adicionar', 'uses' => 'Admin\CursoController@adicionar']);
	Route::post('/admin/cursos/salvar',['as' => 'admin.cursos.salvar', 'uses' => 'Admin\CursoController@salvar']);
	Route::get('/admin/cursos/editar/{id}',['as' => 'admin.cursos.editar', 'uses' => 'Admin\CursoController@editar']);
	Route::put('/admin/cursos/atualizar/{id}',['as' => 'admin.cursos.atualizar', 'uses' => 'Admin\CursoController@atualizar']);
	Route::get('/admin/cursos/deletar/{id}',['as' => 'admin.cursos.deletar', 'uses' => 'Admin\CursoController@deletar']);*/
});