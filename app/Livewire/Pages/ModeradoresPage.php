<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ModeradoresPage extends Component
{
    public function render()
    {
        return view('livewire.pages.moderadores-page')
            ->title(t('moderadores.page_title') . ' – IFATSEA África 2026');
    }
}
