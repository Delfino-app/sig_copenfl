<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carteira extends Model
{
    //
    public function endereco(){

    	return $this->morphOne(Endereco::class,'entidade');
    }

    public function empresa(){ //Local de Trabalho

    	return $this->morphOne(Empresa::class,'entidade');
    }

    public function escola(){

    	return $this->morphOne(Escola::class,'entidade');
    }
}
