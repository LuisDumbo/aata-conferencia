<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{

    protected $table = 'inscricoes';
    
    protected $fillable = [
        'nome_completo',
        'data_nascimento',
        'nacionalidade',
        'numero_documento',
        'validade_documento',
        'organizacao',
        'funcao',
        'area_atuacao',
        'anos_experiencia',
        'email',
        'telefone',
        'pais_residencia',
        'tipo_participacao',
        'apresenta_tema',
        'tema',
        'data_chegada',
        'data_partida',
        'apoio_alojamento',
        'apoio_transporte',
        'apoio_visto',
        'restricoes_alimentares',
        'modalidade_pagamento',
        'comprovativo_anexado',
        'informacoes_adicionais',
        'aceita_termos',
    ];

    protected $casts = [
        'data_nascimento'     => 'date',
        'validade_documento'  => 'date',
        'data_chegada'        => 'date',
        'data_partida'        => 'date',
        'apresenta_tema'      => 'boolean',
        'apoio_alojamento'    => 'boolean',
        'apoio_transporte'    => 'boolean',
        'apoio_visto'         => 'boolean',
        'comprovativo_anexado'=> 'boolean',
        'aceita_termos'       => 'boolean',
    ];
}
