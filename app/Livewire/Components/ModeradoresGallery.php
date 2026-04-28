<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ModeradoresGallery extends Component
{
    public int $perPage = 10;

    public function loadMore(): void
    {
        $this->perPage += 10;
    }

    public function render()
    {
        $translations = config(current_lang() . '.moderadores.perfis', config('pt.moderadores.perfis', []));

        $all = collect(config('moderadores', []))->map(function ($mod) use ($translations) {
            $trans = $translations[$mod['slug']] ?? [];
            return array_merge($mod, $trans);
        });

        $total      = $all->count();
        $moderadores = $all->take($this->perPage)->values();
        $hasMore    = $moderadores->count() < $total;

        return view('livewire.components.moderadores-gallery', [
            'moderadores' => $moderadores,
            'hasMore'     => $hasMore,
        ]);
    }
}
