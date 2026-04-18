<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscricoes', function (Blueprint $table) {
            $table->id();

            // Dados Pessoais
            $table->string('nome_completo');
            $table->date('data_nascimento');
            $table->string('nacionalidade');
            $table->string('numero_documento');
            $table->date('validade_documento');

            // Dados Profissionais
            $table->string('organizacao');
            $table->string('funcao');
            $table->string('area_atuacao');
            $table->string('anos_experiencia');

            // Contactos
            $table->string('email');
            $table->string('telefone');
            $table->string('pais_residencia');

            // Participação
            $table->string('tipo_participacao');
            $table->boolean('apresenta_tema')->default(false);
            $table->string('tema')->nullable();

            // Logística
            $table->date('data_chegada')->nullable();
            $table->date('data_partida')->nullable();
            $table->boolean('apoio_alojamento')->default(false);
            $table->boolean('apoio_transporte')->default(false);
            $table->boolean('apoio_visto')->default(false);
            $table->string('restricoes_alimentares')->nullable();

            // Pagamento
            $table->string('modalidade_pagamento')->nullable();
            $table->boolean('comprovativo_anexado')->default(false);

            // Informações Adicionais
            $table->text('informacoes_adicionais')->nullable();

            // Declaração
            $table->boolean('aceita_termos')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscricoes');
    }
};
