<?php

namespace App\Livewire\Components;

use Livewire\Component;

class SpeakersGallery extends Component
{
    public int $perPage = 10;

    public function loadMore(): void
    {
        $this->perPage += 10;
    }

    public function render()
    {
        $translations = config(current_lang() . '.palestrantes.speakers', config('pt.palestrantes.speakers', []));

        $all = collect(config('speakers', []))->map(function ($sp) use ($translations) {
            $trans = $translations[$sp['slug']] ?? [];
            return array_merge($sp, $trans);
        });

        $total    = $all->count();
        $speakers = $all->take($this->perPage)->values();
        $hasMore  = $speakers->count() < $total;

        return view('livewire.components.speakers-gallery', [
            'speakers' => $speakers,
            'hasMore'  => $hasMore,
        ]);
    }
}
