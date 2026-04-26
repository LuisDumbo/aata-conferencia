<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class CountriesPage extends Component
{
    public function render()
    {
        return view('livewire.pages.countries-page')
            ->title(t('paises.page_title') . ' – IFATSEA África 2026');
    }
}
