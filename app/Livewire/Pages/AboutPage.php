<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class AboutPage extends Component
{

    public $title = 'Quem Somos';

    public $subtitle = 'A Conferência Internacional é um evento que reúne especialistas, académicos e profissionais para partilhar conhecimento e experiências.';



    public function render()
    {
        return view('livewire.pages.about-page');
    }
}
