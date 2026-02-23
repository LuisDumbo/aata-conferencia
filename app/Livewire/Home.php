<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Home extends Component
{
    public array $event = [];

    public function mount(): void
    {
        $this->event = [
            // Data/hora do evento (Luanda = UTC+1)
            'start_iso' => '2026-06-15T09:00:00+01:00',

            'title' => '16ª Reunião da Região África da IFATSEA',
            'tagline' => 'Promover a segurança e a excelência operacional em África através da implementação e
Manutenção de sistemas CNS/ATM modernos.',
            'dates' => '23–26 de Junho de 2026',
            'venue' => 'Centro de Convenções de Luanda, Luanda, Angola',

            // Imagem do hero (pode ser local: asset("images/hero.jpg"))
            'hero_bg_url' => 'https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=2400&q=80',

            // Destaques (fácil de editar / traduzir)
            'highlights' => [
                'trilhas' => '4+',
                'sessoes' => '20+',
                'palestrantes' => '12+',
                'participantes' => '300+',
            ],
        ];
    }

    public function getStartLabelProperty(): string
    {
        try {
            // Usa locale pt (PT). Se quiser pt_AO, é possível, mas nem sempre vem por defeito no servidor.
            return Carbon::parse($this->event['start_iso'])
                ->locale('pt_PT')
                ->translatedFormat('d \\d\\e F \\d\\e Y, H:i');
        } catch (\Throwable $e) {
            return 'Data inválida (verifique start_iso)';
        }
    }

    public function render()
    {
        return view('livewire.home')
            ->title($this->event['title'] ?? 'IFATSEA África 2026');
    }
}
