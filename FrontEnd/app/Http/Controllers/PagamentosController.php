<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class PagamentosController extends Controller
{

    public function pagamentos(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            $notFound = "";

            if(Session::has('notFound')){

                $notFound = Session::get('notFound');
            }

            return view('adds.pagamentos',['name' => $name, 'token' => $token, 'notFound' => $notFound]);
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();

            return redirect()->route('login');
        }
    }

    public function pagamentosCandidato(Request $req){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');

            $token = Session::get('access_token');

            $id = $req["processo_num"];

            return redirect()->route('pagamento.dados',$id);         
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();

            return redirect()->route('login');
        }
    }

    public function pagamentosPost(Request $req){

        //Faker -  Pagamento Feito
        $id = $req["pagamento_candidato"];

        (new helper())->pagamentoFeito();

        return redirect()->route('pagamento.dados',$id);
    }

    public function pagamentosDadosCandidato($id){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');

            $token = Session::get('access_token');

            //Request - Licença
            $dados = ApiRequestController::verCandidato("licenca",$id);

            if(!isset($dados->candidato)){

                //Request - Carteira
                $dados = ApiRequestController::verCandidato("carteira",$id);
            }

            if(isset($dados->message) && $dados->message == 'Unauthenticated.'){
                
                //Criando Message Auth e Redir to Login
                (new helper())->expireToken();

                return redirect()->route('login');
            }
            else{

                //Validate Candidato
                if(isset($dados->candidato)){

                    $candidato = $dados->candidato;

                    //Faker Historico de Pagamentos
                    $pagamentos = [
                        [
                          "id"=> 1,
                          "desc"=> "Primeiro Pagamento",
                          "data" => "20/12/2015"
                        ],
                        [
                           "id"=> 2,
                           "desc"=> "Segundo Pagamento",
                           "data" => "20/12/2016"
                        ],
                        [
                           "id"=> 3,
                           "desc"=> "Terceiro Pagamento",
                           "data" => "20/12/2017"
                        ],
                        [
                            "id"=> 4,
                            "desc"=> "Quarto Pagamento",
                            "data" => "20/12/2018"
                        ],
                        [
                            "id"=> 5,
                            "desc"=> "Quinto Pagamento",
                            "data" => "20/12/2019"
                        ],
                        [
                            "id"=> 6,
                            "desc"=> "Sexto Pagamento",
                            "data" => "20/12/2020"
                        ],
                    ];

                    //Faker Pagamento Feito Session Flash
                    $info = "";

                    //Verificar Flash Messages
                    if(Session::has(['pagamentoFeito'])){

                        //Sem Autorizacao
                        $info = Session::get('pagamentoFeito');
                    }

                    return view('adds.pagamentos',['name' => $name,'token' => $token, 'candidato' => $candidato, 'pagamentos' => $pagamentos, "info" => $info]);
                }
                else{

                    //404 Not Found - registro nao encontrado
                    (new helper())->notFound();

                    return redirect()->route('pagamentos');
                }
            }            
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();

            return redirect()->route('login');
        }
    }
}
