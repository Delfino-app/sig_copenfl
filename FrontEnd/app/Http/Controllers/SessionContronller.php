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

    //Session Adds
    public function sessionAddLicenca(){

        (new helper())->addLicenca();

        return true;
    }

    //Logout
    public function logout(){

        Session::forget(['name','email','access_token']);

        return redirect()->route('login');
    }

}
