<?php

namespace App\Http\Controllers\Municipio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Municipio;

class MunicipioController extends Controller
{
    
    public function municipiosAll(){

    	$municipios = Municipio::all();

    	$data = [];

    	foreach ($municipios as $key => $value) {
    		
    		$new = [

    			'id' => $value->id,
    			'nome' => $value->nome,
    			'provincia_id' => $value->provincia_id
    		];

    		array_push($data, $new);
    	}

    	return $data;
    }
    public function municipiosProvincia($id_provincia){

    	$municipios = Municipio::all()->where('provincia_id','=',$id_provincia);


    	$data = [];

    	foreach ($municipios as $key => $value) {
    		
    		$new = [

    			'id' => $value->id,
    			'nome' => $value->nome,
    			'provincia_id' => $value->provincia_id
    		];

    		array_push($data, $new);
    	}

    	return $data;
    }
}
