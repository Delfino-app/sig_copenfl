<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $fillable = [
    	
        'bairro', 'rua', 'rua_num', 'telefone', 'email', 'provincia_id', 'municipio_id',
    ];

    public function entidade(){

    	return $this->morphTo();
    }
}
