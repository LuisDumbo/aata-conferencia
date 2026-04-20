<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class SpeakersPage extends Component
{
    public function render()
    {
        return view('livewire.pages.speakers-page')
            ->title(t('palestrantes.page_title') . ' – IFATSEA África 2026');
    }
}
