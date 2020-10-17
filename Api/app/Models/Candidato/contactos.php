<?php

namespace App\Models\Candidato;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactos extends Model
{
    use HasFactory;
    protected $fillable = ["email", 'telefone', 'caixa_postal', 'fax', 'tipo', 'candidato_id'];
}
