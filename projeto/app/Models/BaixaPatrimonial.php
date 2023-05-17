<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baixa_Patrimonial extends Model
{
    use HasFactory;
    
    protected $table = "baixasPatrimoniais";

    protected $fillable = ['responsavelentregar', 'datadabaixa', 'encarregadodaretirada', 'quantidaderetirada', 'itemretirado', 'numerodoitemretirado'];
}