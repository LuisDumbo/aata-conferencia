<?php

namespace App\Exports;

use App\Models\Inscricao;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class InscricoesExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithStyles
{
    public function collection()
    {
        return Inscricao::orderBy('created_at', 'desc')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nome Completo',
            'Data Nascimento',
            'Nacionalidade',
            'Nº Documento',
            'Validade Documento',
            'Organização',
            'Função',
            'Área de Atuação',
            'Anos Experiência',
            'Email',
            'Telefone',
            'País Residência',
            'Tipo Participação',
            'Apresenta Tema',
            'Tema',
            'Data Chegada',
            'Data Partida',
            'Apoio Alojamento',
            'Apoio Transporte',
            'Apoio Visto',
            'Restrições Alimentares',
            'Modalidade Pagamento',
            'Comprovativo Anexado',
            'Informações Adicionais',
            'Aceita Termos',
            'Data de Inscrição',
        ];
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->nome_completo,
            $row->data_nascimento?->format('d/m/Y'),
            $row->nacionalidade,
            $row->numero_documento,
            $row->validade_documento?->format('d/m/Y'),
            $row->organizacao,
            $row->funcao,
            $row->area_atuacao,
            $row->anos_experiencia,
            $row->email,
            $row->telefone,
            $row->pais_residencia,
            $row->tipo_participacao,
            $row->apresenta_tema ? 'Sim' : 'Não',
            $row->tema,
            $row->data_chegada?->format('d/m/Y'),
            $row->data_partida?->format('d/m/Y'),
            $row->apoio_alojamento ? 'Sim' : 'Não',
            $row->apoio_transporte ? 'Sim' : 'Não',
            $row->apoio_visto ? 'Sim' : 'Não',
            $row->restricoes_alimentares,
            $row->modalidade_pagamento,
            $row->comprovativo_anexado ? 'Sim' : 'Não',
            $row->informacoes_adicionais,
            $row->aceita_termos ? 'Sim' : 'Não',
            $row->created_at?->format('d/m/Y H:i'),
        ];
    }

    public function styles(Worksheet $sheet): array
    {
        return [
            1 => [
                'font'      => ['bold' => true, 'color' => ['argb' => 'FFFFFFFF']],
                'fill'      => ['fillType' => 'solid', 'startColor' => ['argb' => 'FF1E3A5F']],
                'alignment' => ['horizontal' => 'center'],
            ],
        ];
    }
}
