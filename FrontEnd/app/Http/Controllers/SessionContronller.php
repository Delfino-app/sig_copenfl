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

            return view('licenca.lista',['name' => $name,'token' => $token]);
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

    public function licencaVer(){

        if(Session::has(['name','email','access_token'])){

            $name = Session::get('name');
            
            return view('licenca.ver',['name' => $name]);
        }
        else{

            return redirect('/login');
        }
    }
}
