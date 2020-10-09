<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //
    protected $fillable = [
        'bairro', 'casa_num', 'rua', 'predio', 'email', 'telefone_1', 'telefone_2', 'provincia_id', 'municipio_id'
    ];

    public function entidade(){

    	return $this->morphTo();
    }
}
