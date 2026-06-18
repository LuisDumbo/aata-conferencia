<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Salas extends Component
{
    public array $salas = [];

    public function mount(): void
    {
        $this->salas = config('salas', []);
    }

    public function render()
    {
        return view('livewire.components.salas');
    }
}
