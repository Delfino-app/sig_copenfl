<?php

namespace App\Models\Inscricao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidato\candidatos;
use App\Models\Inscricao\dados_academicos;
use App\Models\Inscricao\documentos;

class inscricao_carteiras extends Model
{
    use HasFactory;

    protected $fillable = ['numero', 'sequencia', 'estado'];

    public function candidato(){
        return $this->belongsTo(candidatos::class,"candidato_id");
    }
    public function dados_academicos(){
        return $this->morphMany(dados_academicos::class,"model");
    }
    public function documentos(){
        return $this->morphMany(documentos::class,"model");
    }
}
