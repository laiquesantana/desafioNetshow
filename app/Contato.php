<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{

    protected $table = 'contato';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'anexo','mensagem','telefone',
    ];
}
