<?php

namespace App\Livewire\Components;

use Livewire\Component;
// use App\Models\Speaker;

class SpeakersGallery extends Component
{
    public int $perPage = 10;

    public function loadMore(): void
    {
        $this->perPage += 10;
    }

    public function render()
    {
        // 🔹 Buscar todos os oradores do ficheiro config/speakers.php
        $all = collect(config('speakers', []));

        // Total de registos
        $total = $all->count();

        // Paginação manual (Load More)
        $speakers = $all
            ->take($this->perPage)
            ->values();

        // Verifica se ainda há mais registos
        $hasMore = $speakers->count() < $total;

        return view('livewire.components.speakers-gallery', [
            'speakers' => $speakers,
            'hasMore'  => $hasMore,
        ]);
    }
}
