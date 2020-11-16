<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class SessionContronller extends Controller
{   

    //Login
    public function index(){

        Session::forget(['name','email','access_token']);

        $message = "";

        if(Session::has('expireToken')){

            $message = Session::get('expireToken');
        }

        return view('login',['info' => $message]);
    }

    //Start Session
    public function start(Request $req){
        
        //Start Session
        Session::put(['name' => $req['name'],'email' => $req['email'],'access_token' =>$req['_api_token'], 'redir' => route('home')]);

        return Session::all();
    }

    //Logout
    public function logout(){

        Session::forget(['name','email','access_token']);

        return redirect()->route('login');
    }

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

    //===Licencas===
    public function licenca(){

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
                if(Session::has(['name'])){

                    //Sem Autorizacao
                    $infoAuth = Session::get('semAutorizacao');
                }

                if(Session::has(['name'])){

                    //Registro Deletado
                    $infoDelete = Session::get('deleteRegistro');
                }

                $candidatos = isset($dados->candidatos) ? $dados->candidatos : [];

                return view('licenca.lista',['name' => $name,'token' => $token, 'candidatos' => $candidatos , 'infoAuth' => $infoAuth , 'infoDelete' => $infoDelete]);
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

            $dados = ApiRequestController::vercandidato($id);

            if(!empty($dados) && isset($dados->candidatos)){

                return view('licenca.RegistroFeito',['name' => $name,'token' => $token,'id' => $id]);
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

    //Nova Licenca (Add Doc) View
    public function AddDoc($id){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            $dados = ApiRequestController::vercandidato($id);

            if(isset($dados->message) && $dados->message == 'Unauthenticated.'){
                //Criando Message Auth e Redir to Login
                (new helper())->expireToken();

                return redirect()->route('login');
            }
            else{

                //Validate Candidato
                if(isset($dados->candidatos)){

                    $candidato = $dados->candidatos;

                    $docs = [];

                    //Validate Show Documentos
                    if(isset($candidato->inscricao->licenca->academic_data)){

                        $tipoDoc = $candidato->inscricao->licenca->academic_data->nivel;

                        if($tipoDoc == "Medio"){

                            $tipoDoc = "Medio_Estudando";
                        }
                        elseif($tipoDoc == "Superior"){

                            $tipoDoc = "Licenciatura_Estudando";
                        }

                        //View List Docs
                        $doc = ApiRequestController::lisDocs($tipoDoc);

                        $docs = isset($doc->documentos) ? $doc->documentos : [];
                    }

                    return view('licenca.addDoc',['name' => $name,'token' => $token,'docs' => $docs]);
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

    //Ver Dados Licenca View
    public function licencaVer($id){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');

            $token = Session::get('access_token');

            //Request
            $dados = ApiRequestController::vercandidato($id);

            if(isset($dados->message) && $dados->message == 'Unauthenticated.'){
                
                //Criando Message Auth e Redir to Login
                (new helper())->expireToken();

                return redirect()->route('login');
            }
            else{

                //Validate Candidato
                if(isset($dados->candidatos)){

                    $candidato = $dados->candidatos;

                    $docs = [];

                    //Validate Show Documentos
                    if(isset($candidato->inscricao->licenca->academic_data)){

                        $tipoDoc = $candidato->inscricao->licenca->academic_data->nivel;

                        if($tipoDoc == "Medio"){

                            $tipoDoc = "Medio_Estudando";
                        }
                        elseif($tipoDoc == "Superior"){

                            $tipoDoc = "Licenciatura_Estudando";
                        }

                        //View List Docs
                        $doc = ApiRequestController::lisDocs($tipoDoc);

                        $docs = isset($doc->documentos) ? $doc->documentos : [];

                    }

                    return view('licenca.ver',['name' => $name,'token' => $token, 'candidato' => $candidato, 'docs' => $docs]);
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

    //Gerando PDF
    public function recibo($id){

        #$licenca = Licenca::find($id);

        #if (!empty($licenca)){

           # $data = explode(" ", $licenca['created_at']);

            #$dataD = date('d/m/Y', strtotime($data[0]));

           # $licenca['data_registro'] = $dataD;
           
            #$pdf = PDF::loadView('licenca.fichaRecibo');

            #return $pdf->setPaper('a4')->stream('Recibo de Licença nº'.$id.'.pdf');
            $data = array("Teste" => 2);
            $pdf = PDF::loadView('licenca.fichaRecibo',$data);
            return $pdf->setPaper('a4')->stream('Recibo de Licença nº'.$id.'.pdf');
        #}
        #else{

           # return redirect('/404');
        #}
    }

    //Pesquisa Processo
    public function pesquisaProcesso(Request $req){

        return redirect()->route('licenca.lista');
    }

    //Suporte
    public function suporte(Request $req){

        dd($req->all());
    }

    //===Carteiras===
    public function carteira(){
        
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
                if(Session::has(['name'])){

                    //Sem Autorizacao
                    $infoAuth = Session::get('semAutorizacao');
                }

                if(Session::has(['name'])){

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

            $dados = ApiRequestController::vercandidato($id);

            if(!empty($dados) && isset($dados->candidatos)){

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
