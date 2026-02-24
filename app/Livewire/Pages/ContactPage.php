<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ContactPage extends Component
{

    public $title = 'Contacto';

    public $subtitle = 'Entre em contacto connosco para obter mais informações sobre inscrições, parcerias ou participação no evento.';



    public function render()
    {
        return view('livewire.pages.contact-page');
    }
}
