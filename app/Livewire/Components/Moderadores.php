<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Moderadores extends Component
{
    public array $moderadores = [];

    public function mount(): void
    {
        $this->moderadores = config('moderadores', []);
    }

    public function render()
    {
        return view('livewire.components.moderadores');
    }
}
