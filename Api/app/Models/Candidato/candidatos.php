<?php

namespace App\Models\Candidato;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inscricao\inscricao_licencas;
use App\Models\Inscricao\inscricao_carteiras;
use App\Models\Candidato\enderecos;
use App\Models\Candidato\contactos;
class candidatos extends Model
{
    use HasFactory;

    public function licenca(){
        return $this->hasMany(inscricao_licencas::class,"candidato_id");
    }
    public function carteira(){
        return $this->hasMany(inscricao_carteiras::class,"candidato_id");
    }
    public function endereco(){
        return $this->hasMany(enderecos::class,"candidato_id");
    }
    public function contacto(){
        return $this->hasMany(contactos::class,"candidato_id");
    }
}
