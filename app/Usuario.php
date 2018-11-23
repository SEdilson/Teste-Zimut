<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class Usuario extends Model
{
    use HasUuid;
    protected $fillable = ['uuid', 'nome', 'dataNascimento', 'cpf', 'cep', 'endereco', 'numero', 'bairro', 'cidade', 'estado', 'complemento'];
}
