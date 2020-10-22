<?php

namespace App\Models\Candidato;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidato\paises;
use App\Models\Candidato\municipios;
class provincias extends Model
{
    use HasFactory;
    public function pais(){
        return $this->belongsTo(paises::class,"pais_id");
    }
    public function municipio (){
        return $this->hasMany(municipios::class,"provincia_id");
    }
    
}
