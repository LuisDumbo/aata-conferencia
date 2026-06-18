<?php

namespace App\Livewire\Pages\Salas;

use Livewire\Component;

class Show extends Component
{
    public array $sala = [];

    public function mount(string $slug): void
    {
        $base = collect(config('salas', []))->firstWhere('slug', $slug);
        abort_if(!$base, 404);

        $translations = config(current_lang() . '.salas.perfis.' . $slug,
                        config('pt.salas.perfis.' . $slug, []));

        $this->sala = array_merge($base, $translations);
    }

    public function render()
    {
        return view('livewire.pages.salas.show')
            ->title(t('salas.profile_title') . ' – ' . ($this->sala['name'] ?? ''));
    }
}
