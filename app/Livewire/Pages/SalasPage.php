<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class SalasPage extends Component
{
    public function render()
    {
        return view('livewire.pages.salas-page')
            ->title(t('salas.page_title') . ' – IFATSEA África 2026');
    }
}
