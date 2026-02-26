<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class AboutPage extends Component
{

    public $title = 'Reunião Regional Africana da IFATSEA';

    public $subtitle = 'A Conferência Internacional é um evento que reúne especialistas, académicos e profissionais para partilhar conhecimento e experiências.';



    public function render()
    {
        return view('livewire.pages.about-page')
            ->title($this->event['title'] ?? 'IFATSEA África 2026 - SOBRE O EVENTO');
    }
}
