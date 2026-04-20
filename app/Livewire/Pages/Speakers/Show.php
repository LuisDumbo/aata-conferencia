<?php

namespace App\Livewire\Pages\Speakers;

use Livewire\Component;

class Show extends Component
{
    public array $speaker = [];

    public function mount(string $slug): void
    {
        $base = collect(config('speakers', []))->firstWhere('slug', $slug);
        abort_if(!$base, 404);

        $translations = config(current_lang() . '.palestrantes.speakers.' . $slug,
                        config('pt.palestrantes.speakers.' . $slug, []));

        $this->speaker = array_merge($base, $translations);
    }

    public function render()
    {
        return view('livewire.pages.speakers.show')
            ->title(t('palestrantes.profile_title') . ' – ' . ($this->speaker['name'] ?? ''));
    }
}
