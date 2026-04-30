<?php

namespace App\Filament\Resources\Inscricaos\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InscricaoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            Section::make('Informações Pessoais')
                ->icon('heroicon-o-user')
                ->columns(2)
                ->schema([
                    TextInput::make('nome_completo')
                        ->label('Nome Completo')
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull(),

                    DatePicker::make('data_nascimento')
                        ->label('Data de Nascimento')
                        ->required()
                        ->displayFormat('d/m/Y'),

                    TextInput::make('nacionalidade')
                        ->label('Nacionalidade')
                        ->required()
                        ->maxLength(100),

                    TextInput::make('numero_documento')
                        ->label('Nº Documento')
                        ->required()
                        ->maxLength(100),

                    DatePicker::make('validade_documento')
                        ->label('Validade do Documento')
                        ->required()
                        ->displayFormat('d/m/Y'),
                ]),

            Section::make('Informações Profissionais')
                ->icon('heroicon-o-briefcase')
                ->columns(2)
                ->schema([
                    TextInput::make('organizacao')
                        ->label('Organização')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('funcao')
                        ->label('Função')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('area_atuacao')
                        ->label('Área de Atuação')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('anos_experiencia')
                        ->label('Anos de Experiência')
                        ->required()
                        ->maxLength(50),
                ]),

            Section::make('Contacto')
                ->icon('heroicon-o-envelope')
                ->columns(2)
                ->schema([
                    TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->required()
                        ->maxLength(255),

                    TextInput::make('telefone')
                        ->label('Telefone')
                        ->tel()
                        ->required()
                        ->maxLength(50),

                    TextInput::make('pais_residencia')
                        ->label('País de Residência')
                        ->required()
                        ->maxLength(100)
                        ->columnSpanFull(),
                ]),

            Section::make('Participação')
                ->icon('heroicon-o-presentation-chart-bar')
                ->columns(2)
                ->schema([
                    Select::make('tipo_participacao')
                        ->label('Tipo de Participação')
                        ->required()
                        ->options([
                            'Participante' => 'Participante',
                            'Delegado'     => 'Delegado',
                            'Orador'       => 'Orador',
                            'Observador'   => 'Observador',
                            'Patrocinadores e Esposas' => 'Patrocinadores e Esposas',
                        ]),

                    Toggle::make('apresenta_tema')
                        ->label('Apresenta Tema')
                        ->live()
                        ->inline(false),

                    Textarea::make('tema')
                        ->label('Tema da Apresentação')
                        ->rows(3)
                        ->maxLength(500)
                        ->visible(fn ($get) => $get('apresenta_tema'))
                        ->columnSpanFull(),
                ]),

            Section::make('Logística')
                ->icon('heroicon-o-map-pin')
                ->columns(2)
                ->schema([
                    DatePicker::make('data_chegada')
                        ->label('Data de Chegada')
                        ->displayFormat('d/m/Y'),

                    DatePicker::make('data_partida')
                        ->label('Data de Partida')
                        ->displayFormat('d/m/Y'),

                    Toggle::make('apoio_alojamento')
                        ->label('Apoio Alojamento')
                        ->inline(false),

                    Toggle::make('apoio_transporte')
                        ->label('Apoio Transporte')
                        ->inline(false),

                    Toggle::make('apoio_visto')
                        ->label('Apoio Visto')
                        ->inline(false),

                    Textarea::make('restricoes_alimentares')
                        ->label('Restrições Alimentares')
                        ->rows(2)
                        ->maxLength(255)
                        ->columnSpanFull(),
                ]),

            Section::make('Pagamento')
                ->icon('heroicon-o-credit-card')
                ->columns(2)
                ->schema([
                    TextInput::make('modalidade_pagamento')
                        ->label('Modalidade de Pagamento')
                        ->maxLength(100),

                    Toggle::make('comprovativo_anexado')
                        ->label('Comprovativo Anexado')
                        ->inline(false),
                ]),

            Section::make('Informações Adicionais')
                ->icon('heroicon-o-chat-bubble-left-ellipsis')
                ->columns(1)
                ->schema([
                    Textarea::make('informacoes_adicionais')
                        ->label('Informações Adicionais')
                        ->rows(4)
                        ->maxLength(1000),

                    Toggle::make('aceita_termos')
                        ->label('Aceita os Termos')
                        ->inline(false),
                ]),
        ]);
    }
}
