<?php

namespace App\Http\Controllers\Licenca;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enfermeiro;
use App\Pais;
use App\Provincia;
use App\Municipio;
use App\Licenca;
use PDF;

class LicencaController extends Controller
{
    //
    public function index(){

    	$all = Licenca::all();

        $all->load('endereco','empresa','escola');

    	$licencas = [];

    	foreach ($all as $key => $value) {
    		
    		$value->data_nascimento = date('d/m/Y', strtotime($value->data_nascimento));

    		$data = explode(" ", $value->created_at);

    		$dataD = date('d/m/Y', strtotime($data[0]));

    		$dataH = date('H:i', strtotime($data[1]));

    		$value['data_registro'] = $dataD." ".$dataH;

            $value->endereco->telefone_1 = number_format($value->endereco->telefone_1, 0,',',' ');

    		array_push($licencas, (Object)$value);
    	}

    	return view('licenca.lista',compact('licencas'));
    }

    public function nova(){

    	$pais = Pais::all();
    	$provincias = Provincia::all();
    	$municipios = Municipio::all();

    	return view('licenca.nova',compact('provincias','municipios'));
    }

    public function adicionar(Request $req){

    	$dadosPessoais = [

    		'nome' => $req['dados_nome'],
    		'nome_pai' => $req['dados_nome_pai'],
    		'nome_mae' => $req['dados_nome_mae'],
    		'data_nascimento' => $req['dados_nascimento'],
    		'genero' => $req['dados_sexo'],
    		'tipo_estudante' => $req['tipo_estudante'],
    		'estado_civil' => $req['dados_estado_civil'],
    		'bi_passaport_num' => $req['dados_bi'],
    		'bi_emissao' => $req['bi_emisao'],
    		'bi_validade' => $req['bi_validade'],
    		'pais_id' => $req['dados_pais'],
    		'provincia_id' => $req['dados_provincia'],
    		'municipio_id' => $req['dados_municipio'],
    		'estado' => 'Pendente'
    	];

    	try {

    		$licenca = Licenca::create($dadosPessoais);

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
            ];


            $dadosEmpresa = [

                'bairro' => "",
                'rua' => $req['trabalho_rua'],
                'rua_num' => $req['trabalho_num'],
                'telefone' => $req['trabalho_telefone'],
                'email' => $req['trabalho_email'],
                'provincia_id' => $req['trabalho_provincia'],
                'municipio_id' => $req['trabalho_municipio'],
            ];

            $dadosEscola = [

                'nome' => $req['escola_nome'],
                'tipo' => 'Privada',
                'ano_fim' => $req['escola_ano_formacao'],
                'telefone' => $req['escola_telefone'],
            ];

            //Criando Sub Dados
            $licenca->endereco()->create($dadosEndereco);
            $licenca->empresa()->create($dadosEmpresa);
            $licenca->escola()->create($dadosEscola);

            return redirect()->route('licenca.fichaFeito',$licenca['id']);
    	} catch (Exception $e) {

    		dd($e->getMessage());
    	}
    }

    public static function feito($id){

        return view('licenca.fichaFeito',compact('id'));
    }

    public function recibo($id){

        $licenca = Licenca::find($id);

        if (!empty($licenca)){

            $data = explode(" ", $licenca['created_at']);

            $dataD = date('d/m/Y', strtotime($data[0]));

            $licenca['data_registro'] = $dataD;
           
            $pdf = PDF::loadView('licenca.fichaRecibo',compact('licenca'));

            return $pdf->setPaper('a4')->stream('Recibo de Licença nº'.$id.'.pdf');
        }
        else{

            return redirect('/404');
        }
    }

    public function ver(Request $req, $id){


    	$licenca = Licenca::find($id);

        $licenca->load('endereco','empresa','escola');

    	if (!empty($licenca)){

            $licenca->data_nascimento = date('d/m/Y', strtotime($licenca->data_nascimento));
            $licenca->bi_emissao = date('d/m/Y', strtotime($licenca->bi_emissao));
            $licenca->bi_validade = date('d/m/Y', strtotime($licenca->bi_validade));
    		
    		return view('licenca.ver',compact('licenca'));		
    	}
    	else{

    		return redirect('/404');
    	}
    }
}
