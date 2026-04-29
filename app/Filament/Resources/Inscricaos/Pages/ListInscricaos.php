<?php

namespace App\Filament\Resources\Inscricaos\Pages;

use App\Filament\Resources\Inscricaos\InscricaoResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;

class ListInscricaos extends ListRecords
{
    protected static string $resource = InscricaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('export')
                ->label('Exportar Excel')
                ->icon(Heroicon::OutlinedArrowDownTray)
                ->color('success')
                ->url(route('admin.inscricoes.export'))
                ->openUrlInNewTab(),
        ];
    }
}
