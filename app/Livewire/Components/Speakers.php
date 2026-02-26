<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Speakers extends Component
{
    public array $speakers = [];

    public function mount(): void
    {
        $this->speakers = config('speakers', []);
    }


    public function render()
    {
        return view('livewire.components.speakers');
    }
}
