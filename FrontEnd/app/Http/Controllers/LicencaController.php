<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class LicencaController extends Controller
{
    
    public function index(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            //Request
            $dados = ApiRequestController::licencas("licenca","Pendente");

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

                return view('licenca.lista',['name' => $name,'token' => $token, 'candidatos' => $candidatos, 'infoAuth' => $infoAuth , 'infoDelete' => $infoDelete]);
            }
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();

            return redirect()->route('login');
        }
    }

    //Nova Licenca (Registro) View
    public function licencaNova(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');
            
            return view('licenca.nova',['name' => $name,'token' => $token]);
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();

            return redirect()->route('login');
        }
    }

    //Nova Licenca (Registro) Added
    public function licencaAdded($id){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            $dados = ApiRequestController::verCandidato("licenca",$id);

            if(!empty($dados) && isset($dados->candidato)){

                $info = "";

                $statusPage = false;

                if(Session::has('addLicenca')){

                    $info = Session::get('addLicenca');
                }
                else{
                    //Pagina Indisponivel
                    $statusPage = true;
                }

                return view('licenca.RegistroFeito',['name' => $name,'token' => $token,'id' => $id, 'info' => $info, 'statusPage' => $statusPage]);
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
   
    //Ver Dados Licenca View
    public function licencaVer($id){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');

            $token = Session::get('access_token');

            //Request
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

                    return view('licenca.ver',['name' => $name,'token' => $token, 'candidato' => $candidato]);
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

    //Adicionar Documentos e Pagamentos
    public function licencaDocsPagamentos($id){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');

            $token = Session::get('access_token');

            //Request
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

                    return view('licenca.nova_addDocsPagamentos',['name' => $name,'token' => $token, 'candidato' => $candidato]);
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

    //Editar Dados Licenca View
    public function editLicenca($id){

    }

    //Delete Licenca
    public function deleteLicenca($id){

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

                return redirect()->route('licenca.lista');
            }
            else{

                //Sem Autorizaçao Para Realizar a Acção
                (new helper())->semAutorizacao();
                return redirect()->route('licenca.lista');
            }            
        }
        else{

            //Criando Message Auth e Redir to Login
            (new helper())->expireToken();

            return redirect()->route('login');
        }     
    }
}
