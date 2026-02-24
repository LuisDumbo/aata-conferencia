<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Partners extends Component
{

    public array $partners = [];

    public function mount(): void
    {
        $this->partners = [
            [
                'name' => 'ACAMS Airport Tower Solutions',
                'logo' => 'https://dummyimage.com/520x220/ffffff/0f172a&text=ACAMS',
                'url'  => 'https://example.com',
            ],
            [
                'name' => 'SITTI',
                'logo' => 'https://dummyimage.com/520x220/ffffff/0f172a&text=SITTI',
                'url'  => 'https://example.com',
            ],
            [
                'name' => 'Jotron',
                'logo' => 'https://dummyimage.com/520x220/ffffff/0f172a&text=Jotron',
                'url'  => 'https://example.com',
            ],
            [
                'name' => 'Partner 4',
                'logo' => 'https://dummyimage.com/520x220/ffffff/0f172a&text=Partner+4',
                'url'  => 'https://example.com',
            ],
        ];
    }



    public function render()
    {
        return view('livewire.components.partners');
    }
}
