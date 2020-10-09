<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;
use App\Provincia;
use App\Municipio;
use App\Enfermeiro;
use App\Endereco;
use App\Empresa;
use App\Escola;

use PDF;

class ProcessoController extends Controller
{
    //

    public function novo(){

    	$pais = Pais::all();
    	$provincias = Provincia::all();
    	$municipios = Municipio::all();

    	return view('registro.novo',compact('provincias','municipios'));
    }

    public function adicionar(Request $req){

    	//dd($req->all());

    	$dadosPessoais = [

    		'nome' => $req['dados_nome'],
    		'nome_pai' => $req['dados_nome_pai'],
    		'nome_mae' => $req['dados_nome_mae'],
    		'data_nascimento' => $req['dados_nascimento'],
    		'genero' => $req['dados_sexo'],
    		'estado_civil' => $req['dados_estado_civil'],
    		'bi_passaport_num' => $req['dados_bi'],
    		'pais_id' => $req['dados_pais'],
    		'provincia_id' => $req['dados_provincia'],
    		'municipio_id' => $req['dados_municipio']
    	];

    	$enfermeiro = Enfermeiro::create($dadosPessoais);
	
    	$dadosEndereco = [

    		'bairro' => $req['endereco_bairro'],
    		'casa_num' => $req['endereco_casa'],
    		'rua' => $req['endereco_rua'],
    		'predio' => $req['endereco_predio'],
    		'email' => $req['endereco_email'],
    		'telefone_1' => $req['endereco_telefone_1'],
    		'telefone_2' => $req['endereco_telefone_2'],
    		'provincia_id' => $req['endereco_provincia'],
    		'municipio_id' => $req['endereco_municipio'],
    		'enfermeiro_id' => $enfermeiro['id']
    	];

    	$endereco = Endereco::create($dadosEndereco);

    	$dadosEmpresa = [

    		'rua' => $req['trabalho_rua'],
    		'rua_num' => $req['trabalho_num'],
    		'telefone' => $req['trabalho_telefone'],
    		'email' => $req['trabalho_email'],
    		'provincia_id' => $req['trabalho_provincia'],
    		'municipio_id' => $req['trabalho_municipio'],
    		'enfermeiro_id' => $enfermeiro['id']
    	];

    	$empresa = Empresa::create($dadosEmpresa);

    	$dadosEscola = [

    		'nome' => $req['escola_nome'],
    		'tipo' => 'Privada',
    		'ano_fim' => $req['escola_ano_formacao'],
    		'telefone' => $req['escola_telefone'],
    		'enfermeiro_id' => $enfermeiro['id']
    	];

    	$escola = Escola::create($dadosEscola);

    	return redirect('/processos/feito/'.$enfermeiro['id']);
    }
    public function lista(){

        $enfermeiros = Enfermeiro::all();

        return view('registro.lista',compact('enfermeiros'));
    }

    public static function feito($id){

    	return view('registro.feito',compact('id'));
    }
    public function recibo($id){

        $enfermeiro = Enfermeiro::find($id);

        $pdf = PDF::loadView('registro.recibo',compact('enfermeiro'));

        return $pdf->setPaper('a4')->stream('Recibo.pdf');
    }
}
