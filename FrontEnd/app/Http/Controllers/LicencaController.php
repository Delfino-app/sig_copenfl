<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class LicencaController extends Controller
{

    private $filtroEstado;
    private $filtroDataInicio;
    private $filtroDataFim;


    /*
    *   Get Methods
    */

    public function getFiltroEstado(){

        return $this->filtroEstado;
    }

    public function getFiltroDataInicio(){

        return $this->filtroDataInicio;
    }

    public function getFiltroDataFim(){

        return $this->filtroDataFim;
    }

    /*
    *   Set Methods
    */

    public function setFiltroEstado($filtroEstado){

       $this->filtroEstado = ucfirst($filtroEstado);
    }

    public function setFiltroDataInicio($filtroDataInicio){

       $this->filtroDataInicio = date("Y-m-d", strtotime($filtroDataInicio));
    }

    public function setFiltroDataFim($filtroDataFim){

        $this->filtroDataFim = date("Y-m-d", strtotime($filtroDataFim));
    }

    /*
    * Controllers
    */
    public function index(){

        $estadoDefault = "Pendente";
        $dataInicioDefault = date('Y-m-d');
        
        $this->setFiltroEstado($estadoDefault);
        $this->setFiltroDataInicio($dataInicioDefault);
    
        return $this->show();
    }

    public function show(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            $dados = ApiRequestController::licencas("licenca",$this->getFiltroEstado(),$this->getFiltroDataInicio(),$this->getFiltroDataFim());

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

                //Return Values
                $estadosFiltro = $this->listaEstados($this->getFiltroEstado());
                $dataInicio = date('Y/m/d', strtotime($this->filtroDataInicio));

                $candidatos = isset($dados->candidatos) ? $dados->candidatos : [];

                return view('licenca.lista',['name' => $name,'token' => $token, 'candidatos' => $candidatos, 'infoAuth' => $infoAuth , 'infoDelete' => $infoDelete, 'estadosFiltro' =>$estadosFiltro, 'dataInicioFiltro' => $dataInicio]);
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

    //Lista Fake(?) de Estados
    public function listaEstados($estado){

        if($estado == "Pendente"){

            return [
                "Pendente",
                "Inscrito",
                "Analisado",
                "Aprovado"
            ];
        }
        else if($estado == "Inscrito"){

            return [
                "Inscrito",
                "Pendente",
                "Analisado",
                "Aprovado"
            ];
        }

        else if($estado == "Analisado"){

            return [
                "Analisado",
                "Pendente",
                "Inscrito",
                "Aprovado"
            ];
        }

        else if($estado == "Aprovado"){

            return [
                "Aprovado",
                "Pendente",
                "Inscrito",
                "Analisado"
            ];
        }
    }

    //Filtro (Estado ou Data) - Method Get
    public function filtro($estado,$dataInicio = null,$dataFim = null){

        //Tipos Permetidos -> estado e data
        $this->setFiltroEstado($estado);

        if(!empty($dataInicio)){

            $this->setFiltroDataInicio($dataInicio);
        }

        if(!empty($dataFim)){

            $this->setFiltroDataFim($dataFim);
        }

        return $this->show();
    }

    //Filtro - Method Post
    public function filtroPost(Request $req){

        $dados = (object)[

           "estado" => $req["estado"],
           "dataInicio" => $req["dataInicio"],
           "dataFim" => $req["dataFim"]
        ];

        //Apenas o estado
        if(empty($dados->dataInicio) && empty($dados->dataFim)){

           return redirect()->route('licenca.filtro.get',$dados->estado);
        }
        //Data Inicio
        elseif(empty($dados->dataFim)){

           $dados->dataInicio = date("d-m-Y", strtotime($dados->dataInicio));


           return redirect()->route('licenca.filtro.get',["estado" => $dados->estado,"dataInicio" => $dados->dataInicio]);
        }
        //All
        else{

           $dados->dataInicio = date("d-m-Y", strtotime($dados->dataInicio));
        
           $dados->dataFim = date("d-m-Y", strtotime($dados->dataFim));
           
           return redirect()->route('licenca.filtro.get',["estado" => $dados->estado,"dataInicio" => $dados->dataInicio, "dataFim" => $dados->dataFim]);
        }
    }
}
