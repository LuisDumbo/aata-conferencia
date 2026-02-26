<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class SpeakersPage extends Component
{

    public $title = 'Os Nossos Parceiros & Patrocinadores';

    public $subtitle = 'Temos orgulho em colaborar com organizações e patrocinadores que apoiam a nossa missão e contribuem para o sucesso deste evento.';

    public function render()
    {
        return view('livewire.pages.speakers-page');
    }
}
