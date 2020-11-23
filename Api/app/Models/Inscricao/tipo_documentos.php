<?php

namespace App\Models\Inscricao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inscricao\documentos;
class tipo_documentos extends Model
{
    use HasFactory;

    public function documentos(){
        return $this->hasMany(documentos::class,"tipo_documento_id");
    }
}
