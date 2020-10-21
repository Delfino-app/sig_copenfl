<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionContronller extends Controller
{   

    public function index(){

        Session::forget(['name','email','access_token']);

        return view('login');
    }
    public function start(Request $req){
        
        //Start Session
        Session::put(['name' => "User Name",'email' => $req['email'],'access_token' =>$req['_api_token']]);

        return Session::all();
    }

    public function logout(){

        Session::forget(['name','email','access_token']);

        return redirect('/login');
    }

    public function home(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');

            return view('home.dashboard',['name' => $name]);
        }
        else{

            return redirect('/login');
        }
    }

    public function licenca(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            $token = Session::get('access_token');

            $headers = [
                "Authorization: Bearer $token",
                "Accept: application/vnd.proxypay.v2+json",
                "Content-Type: application/json"
            ];

            $options = array(
                CURLOPT_RETURNTRANSFER => true, // return web page
                CURLOPT_HEADER => false, // don't return headers
                CURLOPT_FOLLOWLOCATION => true, // follow redirects
                CURLOPT_MAXREDIRS => 10, // stop after 10 redirects
                CURLOPT_ENCODING => "", // handle compressed
                CURLOPT_USERAGENT => "test", // name of client
                CURLOPT_AUTOREFERER => true, // set referrer on redirect
                CURLOPT_CONNECTTIMEOUT => 120, // time-out on connect
                CURLOPT_TIMEOUT => 120, // time-out on response,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => $headers,
            // CURLOPT_POSTFIELDS => http_build_query($body),
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1
            );

            $ch = curl_init("http://localhost:8000/api/v1/candidato/index");

            curl_setopt_array($ch, $options);

            $msg = curl_exec($ch);
            $erro = false;
            if (curl_errno($ch)) {
                $msg = curl_error($ch);
                $erro = true;
            }
            
            curl_close($ch);

            $dados = json_decode($msg);

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

    public function licencaVer($id){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');

            $token = Session::get('access_token');

            $headers = [
                "Authorization: Bearer $token",
                "Accept: application/vnd.proxypay.v2+json",
                "Content-Type: application/json"
            ];

            $options = array(
                CURLOPT_RETURNTRANSFER => true, // return web page
                CURLOPT_HEADER => false, // don't return headers
                CURLOPT_FOLLOWLOCATION => true, // follow redirects
                CURLOPT_MAXREDIRS => 10, // stop after 10 redirects
                CURLOPT_ENCODING => "", // handle compressed
                CURLOPT_USERAGENT => "test", // name of client
                CURLOPT_AUTOREFERER => true, // set referrer on redirect
                CURLOPT_CONNECTTIMEOUT => 120, // time-out on connect
                CURLOPT_TIMEOUT => 120, // time-out on response,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => $headers,
            // CURLOPT_POSTFIELDS => http_build_query($body),
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1
            );

            $ch = curl_init("http://localhost:8000/api/v1/candidato/show/".$id);

            curl_setopt_array($ch, $options);

            $msg = curl_exec($ch);
            $erro = false;
            if (curl_errno($ch)) {
                $msg = curl_error($ch);
                $erro = true;
            }
            
            curl_close($ch);

            $dados = json_decode($msg);

            dd($dados);

            if(isset($dados->message) && $dados->message == 'Unauthenticated.'){
                //Token Expire
                return redirect('/login');
            }
            else{

                $candidatos = $dados->candidatos;
                return view('licenca.ver',['name' => $name,'token' => $token, 'candidatos' => $candidatos]);
            }            
        }
        else{

            return redirect('/login');
        }
    }
}
