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
        // ✅ Opção 1: vindo do banco (recomendado)
        // $speakers = Speaker::query()
        //     ->orderBy('id', 'desc')
        //     ->take($this->perPage)
        //     ->get();
        //
        // $total = Speaker::count();

        // ✅ Opção 2: exemplo (troque pelos seus dados)
        $all = collect([
            ['name' => 'Sam Mahlangu', 'role' => 'IFATSEA AFRICA REGIONAL DIRECTOR', 'photo' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=1200&q=80'],
            ['name' => 'Ing Frank Kofi Apeagyei', 'role' => 'IFATSEA PRESIDENT', 'photo' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?auto=format&fit=crop&w=1200&q=80'],
            ['name' => 'Ing. Nuako Victor Asiamah', 'role' => 'AIR TRAFFIC SAFETY ELECTRONICS PERSONNEL (GAA)', 'photo' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=1200&q=80'],
            ['name' => 'Robert Jere Omusonga', 'role' => 'CHIEF OFFICER AIR NAVIGATION SERVICES', 'photo' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=1200&q=80'],
            ['name' => 'Sam Mahlangu', 'role' => 'IFATSEA AFRICA REGIONAL DIRECTOR', 'photo' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=1200&q=80'],
            ['name' => 'Ing Frank Kofi Apeagyei', 'role' => 'IFATSEA PRESIDENT', 'photo' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?auto=format&fit=crop&w=1200&q=80'],
            ['name' => 'Ing. Nuako Victor Asiamah', 'role' => 'AIR TRAFFIC SAFETY ELECTRONICS PERSONNEL (GAA)', 'photo' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=1200&q=80'],
            ['name' => 'Robert Jere Omusonga', 'role' => 'CHIEF OFFICER AIR NAVIGATION SERVICES', 'photo' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=1200&q=80'],

            ['name' => 'Sam Mahlangu', 'role' => 'IFATSEA AFRICA REGIONAL DIRECTOR', 'photo' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=1200&q=80'],
            ['name' => 'Ing Frank Kofi Apeagyei', 'role' => 'IFATSEA PRESIDENT', 'photo' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?auto=format&fit=crop&w=1200&q=80'],
            ['name' => 'Ing. Nuako Victor Asiamah', 'role' => 'AIR TRAFFIC SAFETY ELECTRONICS PERSONNEL (GAA)', 'photo' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=1200&q=80'],
            ['name' => 'Robert Jere Omusonga', 'role' => 'CHIEF OFFICER AIR NAVIGATION SERVICES', 'photo' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=1200&q=80'],

            // ...adicione mais itens aqui (ou use BD)
        ]);

        $total = $all->count();
        $speakers = $all->take($this->perPage)->values();

        $hasMore = $speakers->count() < $total;

        return view('livewire.components.speakers-gallery', [
            'speakers' => $speakers,
            'hasMore'  => $hasMore,
        ]);
    }
}
