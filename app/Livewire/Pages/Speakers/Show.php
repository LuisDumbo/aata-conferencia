<?php

namespace App\Livewire\Pages\Speakers;

use Livewire\Component;

class Show extends Component
{

    public array $speaker = [];

    public $title = 'Perfil do Orador';

    public $subtitle = 'Descubra o percurso profissional, área de especialização e o contributo do orador para a Reunião Regional Africana da IFATSEA.';

    public function mount(string $slug): void
    {
        $speakers = config('speakers', []);

        $found = collect($speakers)->firstWhere('slug', $slug);

        abort_if(!$found, 404);

        $this->speaker = $found;
    }

    public function render()
    {
        return view('livewire.pages.speakers.show');
    }
}
