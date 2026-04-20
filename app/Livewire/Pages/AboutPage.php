<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class AboutPage extends Component
{
    public function render()
    {
        return view('livewire.pages.about-page')
            ->title(t('sobre.page_title') . ' – IFATSEA África 2026');
    }
}
