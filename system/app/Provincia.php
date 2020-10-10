<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //
    protected $fillable = [
        'nome', 'pais_id',
    ];
}
