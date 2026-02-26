<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class PartnersPage extends Component
{

    public $title = 'Palestrantes';

    public $subtitle = 'Conheça os especialistas convidados que irão partilhar conhecimento e experiência durante o evento.';



    public function render()
    {
        return view('livewire.pages.partners-page');
    }
}
