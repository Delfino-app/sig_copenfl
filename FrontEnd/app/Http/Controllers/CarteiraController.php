<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class CarteiraController extends Controller
{
    //
    public function index(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            //Request
            $dados = ApiRequestController::licencas("carteira","Pendente");

            if(isset($dados->message) && $dados->message == 'Unauthenticated.'){
                
                //Criando Message Auth e Redir to Login
                (new helper())->expireToken();

                return redirect()->route('login');
            }
            else{

                $infoDelete = "";
                $infoAuth = "";

                //Verificar Flash Messages
                if(Session::has(['semAutorizacao'])){

                    //Sem Autorizacao
                    $infoAuth = Session::get('semAutorizacao');
                }

                if(Session::has(['deleteRegistro'])){

                    //Registro Deletado
                    $infoDelete = Session::get('deleteRegistro');
                }


                $candidatos = isset($dados->candidatos) ? $dados->candidatos : [];
                return view('carteira.lista',['name' => $name,'token' => $token, 'candidatos' => $candidatos, 'infoAuth' => $infoAuth, 'infoDelete' => $infoDelete]);
            }
        }
        else{

            //Criando Message Auth
            (new helper())->expireToken();

            return redirect()->route('login');
        }
    }

    
    public function carteiraNova(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            if(isset($dados->message) && $dados->message == 'Unauthenticated.'){
                //Criando Message Auth e Redir to Login
                (new helper())->expireToken();

                return redirect()->route('login');
            }
            else{

                return view('carteira.nova',['name' => $name,'token' => $token]);
            }
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();

            return redirect()->route('login');
        }

    }

    public function carteiraAdded($id){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            $dados = ApiRequestController::verCandidato("carteira",$id);

            if(!empty($dados) && isset($dados->candidato)){

                return view('carteira.RegistroFeito',['name' => $name,'token' => $token,'id' => $id]);
            }
            else{

                //Not Found
                return redirect('404');
            }
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();

            return redirect()->route('login');
        }
    }

    public function carteiraVer($id){
        
        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');

            $token = Session::get('access_token');

            //Request
            $dados = ApiRequestController::verCandidato("carteira",$id);

            if(isset($dados->message) && $dados->message == 'Unauthenticated.'){
                
                //Criando Message Auth e Redir to Login
                (new helper())->expireToken();

                return redirect()->route('login');
            }
            else{

                //Validate Candidato
                if(isset($dados->candidato)){

                    $candidato = $dados->candidato;

                    return view('carteira.ver',['name' => $name,'token' => $token, 'candidato' => $candidato]);
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

    public function deleteCarteira($id){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');

            $token = Session::get('access_token');

            //Request
            $dados = ApiRequestController::deleteCandidato($id);

            if(isset($dados->message) && $dados->message == 'Unauthenticated.'){
                
                //Criando Message Auth e Redir to Login
                (new helper())->expireToken();
                return redirect()->route('login');
            }
            elseif(isset($dados->status) && $dados->status == 'Ok'){

                //Criando Message Info
                (new helper())->deleteRegistro();

                return redirect()->route('carteira.lista');
            }
            else{

                //Sem Autorizaçao Para Realizar a Acção
                (new helper())->semAutorizacao();
                return redirect()->route('carteira.lista');
            }            
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();
            return redirect()->route('login');
        }  
    }
}
