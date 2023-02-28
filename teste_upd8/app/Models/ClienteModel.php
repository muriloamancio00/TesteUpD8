<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table='clientes';
    protected $fillable=['cpf','nome','email','endereco','sexo','estado','cidade','data_nascimento'];

}
