<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licenca extends Model
{
    protected $fillable = [
        'nome', 'nome_pai', 'nome_mae', 'data_nascimento', 'genero', 'estado_civil', 'bi_passaport_num', 'bi_emissao', 'bi_validade', 'pais_id', 'provincia_id', 'municipio_id','estado'
    ];

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
