<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    use HasFactory;
    protected $table = "manutencoes";

    protected $fillable = ['empresa', 'dataprevistadeentrega', 'totaldasaidadebens', 'saida_id'];
}