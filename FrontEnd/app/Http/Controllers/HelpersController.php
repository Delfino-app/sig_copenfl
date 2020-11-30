<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class HelpersController extends Controller
{
    
    //Dashboard
    public function home(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');

            return view('home.dashboard',['name' => $name]);
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();

            return redirect()->route('login');
        }
    }

    public function AddDoc($id){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            $dados = ApiRequestController::verCandidato("licenca",$id);

            if(isset($dados->message) && $dados->message == 'Unauthenticated.'){
                //Criando Message Auth e Redir to Login
                (new helper())->expireToken();

                return redirect()->route('login');
            }
            else{

                //Validate Candidato
                if(isset($dados->candidato)){

                    $candidato = $dados->candidato;

                    return view('adds.addDoc',['name' => $name,'token' => $token,'candidato' => $candidato]);
                }
                else{

                    //404 Not Found
                    return redirect('/404');
                }
            }     
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();

            return redirect()->route('login');
        }
    }

    //Gerando PDF
    public function recibo($id){

        #$licenca = Licenca::find($id);

        #if (!empty($licenca)){

           # $data = explode(" ", $licenca['created_at']);

            #$dataD = date('d/m/Y', strtotime($data[0]));

           # $licenca['data_registro'] = $dataD;
           
            #$pdf = PDF::loadView('licenca.fichaRecibo');

            #return $pdf->setPaper('a4')->stream('Recibo de Licença nº'.$id.'.pdf');
            #$data = array("Teste" => 2);
            #$pdf = PDF::loadView('licenca.fichaRecibo',$data);
            #return $pdf->setPaper('a4')->stream('Recibo de Licença nº'.$id.'.pdf');
        #}
        #else{

           # return redirect('/404');
        #}

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            $dados = ApiRequestController::verCandidato("licenca",$id);

            if(!isset($dados->candidato)){

                $dados = ApiRequestController::verCandidato("carteira",$id);
            }

            if(isset($dados->candidato)){

                $candidato = $dados->candidato;

                return view('adds.fichaRecibo',['name' => $name, 'token' => $token, 'candidato' => $candidato]);

            }else{

                //404 Not Found
                return redirect('/404');
            }
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();

            return redirect()->route('login');
        }
    }

    //Pesquisa Processo
    public function pesquisaProcesso(Request $req){

        $id = $req["processo_num"];

        return redirect()->route('licenca.ver',$id);
    }
    

    //Suporte
    public function suporte(Request $req){

        dd($req->all());
    }
}
