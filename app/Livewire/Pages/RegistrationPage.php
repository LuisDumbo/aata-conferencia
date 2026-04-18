<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Inscricao;

class RegistrationPage extends Component
{
    public $title = 'Inscrição';
    public $subtitle = 'Preencha o formulário abaixo para se inscrever na Reunião da IFATSEA – Luanda, 23 a 26 de Junho de 2025.';

    public int $currentStep = 1;
    public int $totalSteps = 5;

    // Dados Pessoais
    public string $nome_completo = '';
    public string $data_nascimento = '';
    public string $nacionalidade = '';
    public string $numero_documento = '';
    public string $validade_documento = '';

    // Dados Profissionais
    public string $organizacao = '';
    public string $funcao = '';
    public string $area_atuacao = '';
    public string $anos_experiencia = '';

    // Contactos
    public string $email = '';
    public string $telefone = '';
    public string $pais_residencia = '';

    // Participação
    public string $tipo_participacao = '';
    public bool $apresenta_tema = false;
    public string $tema = '';

    // Logística
    public string $data_chegada = '';
    public string $data_partida = '';
    public bool $apoio_alojamento = false;
    public bool $apoio_transporte = false;
    public bool $apoio_visto = false;
    public string $restricoes_alimentares = '';

    // Pagamento
    public string $modalidade_pagamento = '';
    public bool $comprovativo_anexado = false;

    // Adicionais + Declaração
    public string $informacoes_adicionais = '';
    public bool $aceita_termos = false;

    protected function rulesForStep(int $step): array
    {
        return match ($step) {
            1 => [
                'nome_completo'      => 'required|string|min:3|max:255',
                'data_nascimento'    => 'required|date|before:today',
                'nacionalidade'      => 'required|string|max:100',
                'numero_documento'   => 'required|string|max:50',
                'validade_documento' => 'required|date|after:today',
            ],
            2 => [
                'organizacao'      => 'required|string|max:255',
                'funcao'           => 'required|string|max:255',
                'area_atuacao'     => 'required|string|max:255',
                'anos_experiencia' => 'required|string|max:50',
                'email'            => 'required|email|max:255',
                'telefone'         => 'required|string|max:50',
                'pais_residencia'  => 'required|string|max:100',
            ],
            3 => [
                'tipo_participacao' => 'required|in:Participante,Delegado,Orador,Observador',
                'tema'              => 'nullable|required_if:apresenta_tema,true|string|max:255',
            ],
            4 => [
                'data_chegada'  => 'nullable|date',
                'data_partida'  => 'nullable|date|after_or_equal:data_chegada',
            ],
            5 => [
                'aceita_termos' => 'accepted',
            ],
            default => [],
        };
    }

    protected function messagesForStep(int $step): array
    {
        return match ($step) {
            1 => [
                'nome_completo.required'      => 'O nome completo é obrigatório.',
                'nome_completo.min'           => 'O nome deve ter pelo menos 3 caracteres.',
                'data_nascimento.required'    => 'A data de nascimento é obrigatória.',
                'data_nascimento.before'      => 'A data de nascimento deve ser anterior a hoje.',
                'nacionalidade.required'      => 'A nacionalidade é obrigatória.',
                'numero_documento.required'   => 'O número do documento é obrigatório.',
                'validade_documento.required' => 'A data de validade é obrigatória.',
                'validade_documento.after'    => 'O documento deve estar dentro da validade.',
            ],
            2 => [
                'organizacao.required'      => 'A organização/empresa é obrigatória.',
                'funcao.required'           => 'A função/cargo é obrigatória.',
                'area_atuacao.required'     => 'A área de atuação é obrigatória.',
                'anos_experiencia.required' => 'Os anos de experiência são obrigatórios.',
                'email.required'            => 'O email é obrigatório.',
                'email.email'               => 'Introduza um endereço de email válido.',
                'telefone.required'         => 'O telefone é obrigatório.',
                'pais_residencia.required'  => 'O país de residência é obrigatório.',
            ],
            3 => [
                'tipo_participacao.required' => 'Selecione o tipo de participação.',
                'tipo_participacao.in'       => 'Selecione uma opção válida.',
                'tema.required_if'           => 'Indique o tema da sua apresentação.',
            ],
            4 => [
                'data_partida.after_or_equal' => 'A data de partida deve ser igual ou posterior à chegada.',
            ],
            5 => [
                'aceita_termos.accepted' => 'Deve aceitar os termos de participação.',
            ],
            default => [],
        };
    }

    public function nextStep(): void
    {
        $this->validate($this->rulesForStep($this->currentStep), $this->messagesForStep($this->currentStep));
        $this->currentStep++;
    }

    public function previousStep(): void
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function submit(): void
    {
        $this->validate($this->rulesForStep($this->totalSteps), $this->messagesForStep($this->totalSteps));

        Inscricao::create([
            'nome_completo'          => $this->nome_completo,
            'data_nascimento'        => $this->data_nascimento,
            'nacionalidade'          => $this->nacionalidade,
            'numero_documento'       => $this->numero_documento,
            'validade_documento'     => $this->validade_documento,
            'organizacao'            => $this->organizacao,
            'funcao'                 => $this->funcao,
            'area_atuacao'           => $this->area_atuacao,
            'anos_experiencia'       => $this->anos_experiencia,
            'email'                  => $this->email,
            'telefone'               => $this->telefone,
            'pais_residencia'        => $this->pais_residencia,
            'tipo_participacao'      => $this->tipo_participacao,
            'apresenta_tema'         => $this->apresenta_tema,
            'tema'                   => $this->apresenta_tema ? $this->tema : null,
            'data_chegada'           => $this->data_chegada ?: null,
            'data_partida'           => $this->data_partida ?: null,
            'apoio_alojamento'       => $this->apoio_alojamento,
            'apoio_transporte'       => $this->apoio_transporte,
            'apoio_visto'            => $this->apoio_visto,
            'restricoes_alimentares' => $this->restricoes_alimentares ?: null,
            'modalidade_pagamento'   => $this->modalidade_pagamento ?: null,
            'comprovativo_anexado'   => $this->comprovativo_anexado,
            'informacoes_adicionais' => $this->informacoes_adicionais ?: null,
            'aceita_termos'          => $this->aceita_termos,
        ]);

        $this->dispatch('inscricao-sucesso');

        $this->reset([
            'nome_completo', 'data_nascimento', 'nacionalidade', 'numero_documento',
            'validade_documento', 'organizacao', 'funcao', 'area_atuacao', 'anos_experiencia',
            'email', 'telefone', 'pais_residencia', 'tipo_participacao', 'apresenta_tema',
            'tema', 'data_chegada', 'data_partida', 'apoio_alojamento', 'apoio_transporte',
            'apoio_visto', 'restricoes_alimentares', 'modalidade_pagamento', 'comprovativo_anexado',
            'informacoes_adicionais', 'aceita_termos',
        ]);

        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.pages.registration-page');
    }
}
