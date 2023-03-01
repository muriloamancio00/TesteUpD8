<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CidadeModel extends Model
{
    protected $table='cidades';

    protected  $fillable = ['estados_cod_estados','cod_cidades','nome','cep'];
}
