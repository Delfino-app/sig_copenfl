<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    //
    protected $fillable = [
        'nome', 'tipo', 'ano_fim', 'telefone',
    ];

    public function entidade(){

    	return $this->morphTo();
    }
}
