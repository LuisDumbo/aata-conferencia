<?php

namespace App\Filament\Resources\Inscricaos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class InscricaosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('#')
                    ->sortable()
                    ->width('60px'),

                TextColumn::make('nome_completo')
                    ->label('Nome')
                    ->searchable()
                    ->sortable()
                    ->weight('semibold'),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Email copiado'),

                TextColumn::make('telefone')
                    ->label('Telefone')
                    ->searchable(),

                TextColumn::make('pais_residencia')
                    ->label('País')
                    ->searchable()
                    ->sortable(),

                BadgeColumn::make('tipo_participacao')
                    ->label('Tipo')
                    ->colors([
                        'primary' => 'Participante',
                        'success' => 'Orador',
                        'warning' => 'Delegado',
                        'gray'    => 'Observador',
                        'info'    => 'Patrocinadores e Esposas',
                    ]),

                BooleanColumn::make('apresenta_tema')
                    ->label('Tema')
                    ->trueIcon('heroicon-o-microphone')
                    ->falseIcon('heroicon-o-x-mark'),

                BooleanColumn::make('comprovativo_anexado')
                    ->label('Comprovativo')
                    ->trueIcon('heroicon-o-document-check')
                    ->falseIcon('heroicon-o-x-mark'),

                BooleanColumn::make('aceita_termos')
                    ->label('Termos'),

                TextColumn::make('created_at')
                    ->label('Inscrito em')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('tipo_participacao')
                    ->label('Tipo de Participação')
                    ->options([
                        'Participante' => 'Participante',
                        'Delegado'     => 'Delegado',
                        'Orador'       => 'Orador',
                        'Observador'   => 'Observador',
                        'Patrocinadores e Esposas' => 'Patrocinadores e Esposas',
                    ]),

                TernaryFilter::make('comprovativo_anexado')
                    ->label('Comprovativo Anexado'),

                TernaryFilter::make('aceita_termos')
                    ->label('Aceitou Termos'),

                TernaryFilter::make('apresenta_tema')
                    ->label('Apresenta Tema'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
