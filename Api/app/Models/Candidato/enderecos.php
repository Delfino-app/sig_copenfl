<?php

namespace App\Models\Candidato;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidato\municipios;
class enderecos extends Model
{
    use HasFactory;
    protected $fillable = ["municipio_id", 'bairro', 'rua', 'casa', 'tipo', 'candidato_id'];

    public function municipio(){
        return $this->belongsTo(municipios::class,"municipio_id");
    }
}
