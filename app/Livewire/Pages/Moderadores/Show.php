<?php

namespace App\Livewire\Pages\Moderadores;

use Livewire\Component;

class Show extends Component
{
    public array $moderador = [];

    public function mount(string $slug): void
    {
        $base = collect(config('moderadores', []))->firstWhere('slug', $slug);
        abort_if(!$base, 404);

        $translations = config(current_lang() . '.moderadores.perfis.' . $slug,
                        config('pt.moderadores.perfis.' . $slug, []));

        $this->moderador = array_merge($base, $translations);
    }

    public function render()
    {
        return view('livewire.pages.moderadores.show')
            ->title(t('moderadores.profile_title') . ' – ' . ($this->moderador['name'] ?? ''));
    }
}
