<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'assunto',
        'mensagem',
        'aceito',
        'lida',
    ];

    protected $casts = [
        'aceito' => 'boolean',
        'lida'   => 'boolean',
    ];
}
