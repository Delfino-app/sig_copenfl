<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ApiRequestController extends Controller
{
    //Lista Licencas
    public static function licencas(){

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

        $ch = curl_init(DOMINIO_API."/api/v1/candidato/index/licenca/pendente");

        curl_setopt_array($ch, $options);

        $msg = curl_exec($ch);
        $erro = false;
        if (curl_errno($ch)) {
            $msg = curl_error($ch);
            $erro = true;
        }
        
        curl_close($ch);

        $dados = json_decode($msg);

        return $dados;
    }


    //Ver dados de Um Candidato
    public static function verCandidato($id){

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

        $ch = curl_init(DOMINIO_API."/api/v1/candidato/show/".$id);

        curl_setopt_array($ch, $options);

        $msg = curl_exec($ch);
        $erro = false;
        if (curl_errno($ch)) {
            $msg = curl_error($ch);
            $erro = true;
        }
        
        curl_close($ch);

        $dados = json_decode($msg);

        return $dados;
    }

    //Delete Candidato
    public static function deleteCandidato($id){

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
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => $headers,
        // CURLOPT_POSTFIELDS => http_build_query($body),
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1
        );

        $ch = curl_init(DOMINIO_API."/api/v1/candidato/destroy/".$id);

        curl_setopt_array($ch, $options);

        $msg = curl_exec($ch);
        $erro = false;
        if (curl_errno($ch)) {
            $msg = curl_error($ch);
            $erro = true;
        }
        
        curl_close($ch);

        $dados = json_decode($msg);

        return $dados;
    }
}
