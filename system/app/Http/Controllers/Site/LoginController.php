<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class LoginController extends Controller
{
    //

    public function index(){

        Auth::logout();

    	return view('site.login');
    }

    public function entrar(Request $req){

    	$dados =  $req->all();

    	if (Auth::attempt(['email' => $dados['email_login'],'password' => $dados['senha_login']])) {
    		
    		//User Logado

    		return redirect()->route('processos.lista');
    	}
    	else{

            $mensagem = ['info' => "Erro",'sms' => "Os dados inseridos estão incorretos"];

    		return view('site.login',compact('mensagem'));
    	}
    }

    public function sair(){

    	Auth::logout();

    	return redirect()->route('login');
    }
}
