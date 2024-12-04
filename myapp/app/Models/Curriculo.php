<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{


    use HasFactory;

    protected $fillable = ['serie', 'bimestre', 'linguagem', 'codigo', 'descricao', 'objeto_conhecimento', 'discplina_id', 'nivel_ensino', 'origem'];

    
}
