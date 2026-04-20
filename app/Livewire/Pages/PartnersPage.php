<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class PartnersPage extends Component
{
    public function render()
    {
        return view('livewire.pages.partners-page')
            ->title(t('parceiros.page_title') . ' – IFATSEA África 2026');
    }
}
