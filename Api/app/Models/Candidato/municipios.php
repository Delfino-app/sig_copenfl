<?php

namespace App\Models\Candidato;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidato\provincias;
class municipios extends Model
{
    use HasFactory;
    public function provincia (){
        return $this->belongsTo(provincias::class,"provincia_id");
    }
}
