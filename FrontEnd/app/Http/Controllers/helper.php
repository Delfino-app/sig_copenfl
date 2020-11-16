<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class helper extends Controller
{   
    public function messageFlash($type,$message){

        Session::flash($type,$message);
    }

    public function expireToken(){

        $this->messageFlash("expireToken","Sua sessão expirou. Faça login novamente.");
    }

    public function semAutorizacao(){

        $this->messageFlash("semAutorizacao","Não tens autorização para realizar está acção.");
    }
    public function deleteRegistro(){

        $this->messageFlash("deleteRegistro","Registro eliminado com sucesso!.");
    }
}
