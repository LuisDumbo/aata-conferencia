<?php

namespace App\Livewire\Components;

use Livewire\Component;

class SalasGallery extends Component
{
    public int $perPage = 10;

    public function loadMore(): void
    {
        $this->perPage += 10;
    }

    public function render()
    {
        $translations = config(current_lang() . '.salas.perfis', config('pt.salas.perfis', []));

        $all = collect(config('salas', []))->map(function ($sala) use ($translations) {
            $trans = $translations[$sala['slug']] ?? [];
            return array_merge($sala, $trans);
        });

        $total = $all->count();
        $salas = $all->take($this->perPage)->values();
        $hasMore = $salas->count() < $total;

        return view('livewire.components.salas-gallery', [
            'salas'   => $salas,
            'hasMore' => $hasMore,
        ]);
    }
}
