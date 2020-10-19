<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionContronller extends Controller
{
    public function start(Request $req){
        
        //Start Session
        Session::put(['name' => "User Name",'email' => $req['email'],'access_token' =>$req['_api_token']]);

        return Session::all();
    }
}
