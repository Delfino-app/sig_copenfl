<?php

namespace App\Models\Inscricao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inscricao\tipo_documentos;
class documentos extends Model
{
    use HasFactory;

    public function tipo (){
        return $this->belongsTo(tipo_documentos::class,"tipo_documento_id");
    }
}
