<?php

namespace App\Models\Inscricao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidato\candidatos;

class inscricao_licencas extends Model
{
    use HasFactory;
    protected $fillable = ['numero', 'candidato_id', 'estado'];

    public function candidato(){
        return $this->belongsTo(candidatos::class,"candidato_id");
    }
}
