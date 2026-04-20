<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class StayPage extends Component
{
    public function render()
    {
        $lang = current_lang();

        return view('livewire.pages.stay-page', [
            'hotels' => config("{$lang}.hoteis.hotels", config('pt.hoteis.hotels', [])),
        ])->title(t('hoteis.page_title') . ' – IFATSEA África 2026');
    }
}
