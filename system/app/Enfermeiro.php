<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermeiro extends Model
{
    //
    protected $fillable = [
        'nome', 'nome_pai', 'nome_mae', 'data_nascimento', 'genero', 'estado_civil', 'bi_passaport_num', 'pais_id', 'provincia_id', 'municipio_id'
    ];
}
