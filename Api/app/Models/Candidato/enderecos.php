<?php

namespace App\Models\Candidato;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enderecos extends Model
{
    use HasFactory;
    protected $fillable = ["municipio", 'bairro', 'rua', 'casa', 'tipo', 'candidato_id'];
}
