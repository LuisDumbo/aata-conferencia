<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ContactPage extends Component
{
    public function render()
    {
        return view('livewire.pages.contact-page')
            ->title(t('contacto.page_title') . ' – IFATSEA África 2026');
    }
}
