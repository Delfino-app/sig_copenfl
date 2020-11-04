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

        return view('login');
    }

    //Start Session
    public function start(Request $req){
        
        //Start Session
        Session::put(['name' => "User Name",'email' => $req['email'],'access_token' =>$req['_api_token'], 'redir' => route('home')]);

        return Session::all();
    }

    //Logout
    public function logout(){

        Session::forget(['name','email','access_token']);

        return redirect('/login');
    }

    //Dashboard
    public function home(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');

            return view('home.dashboard',['name' => $name]);
        }
        else{

            return redirect('/login');
        }
    }

    //Licencas
    public function licenca(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            //Request
            $dados = ApiRequestController::licencas();

            if(isset($dados->message) && $dados->message == 'Unauthenticated.'){
                //Token Expire
                return redirect('/login');
            }
            else{

                $candidatos = isset($dados->candidatos) ? $dados->candidatos : [];
                return view('licenca.lista',['name' => $name,'token' => $token, 'candidatos' => $candidatos]);
            }
        }
        else{

            return redirect('/login');
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

            return redirect('/login');
        }
    }

    //Nova Licenca (Registro) Added
    public function licencaAdded(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');
            
            return view('licenca.RegistroFeito',['name' => $name,'token' => $token]);
        }
        else{

            return redirect('/login');
        }
    }

    //Nova Licenca (Add Doc) View
    public function licencaAddDoc(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');
            
            return view('licenca.addDoc',['name' => $name,'token' => $token]);
        }
        else{

            return redirect('/login');
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
                //Token Expire
                return redirect('/login');
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

            return redirect('/login');
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
                //Token Expire
                return redirect('/login');
            }
            else{

                return redirect()->route('licenca.lista');
            }            
        }
        else{

            return redirect('/login');
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

        dd($req->all());
    }

    //Suporte
    public function suporte(Request $req){

        dd($req->all());
    }
}
