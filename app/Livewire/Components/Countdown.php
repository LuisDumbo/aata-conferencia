<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Countdown extends Component
{
    // Aceita string tipo: "2026-03-10 09:00:00"
    public string $eventStart;

    public string $titulo = 'Estamos a caminho de um grande encontro';
    public string $subtitulo = 'Um momento que reunirá ideias, pessoas e oportunidades';
    public string $descricao = 'Em breve, daremos início a um evento pensado para partilha de conhecimento e conexões significativas.';

    public function mount(string $eventStart)
    {
        $this->eventStart = $eventStart;
    }

    public function render()
    {
        return view('livewire.components.countdown');
    }
}
