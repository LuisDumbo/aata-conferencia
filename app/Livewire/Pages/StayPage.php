<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Aonde Se Hospedar | 16.a Reuniao da Regiao Africa da IFATSEA')]
class StayPage extends Component
{
    public string $title = 'Aonde Se Hospedar';

    public string $subtitle = 'Sugestoes de hoteis em Luanda para delegados, palestrantes e participantes que procuram opcoes alinhadas ao evento.';

    public array $hotels = [];

    public function mount(): void
    {
        $this->hotels = [
            [
                'name' => 'Hotel Diamante',
                'category' => 'Proximo ao evento',
                'location' => 'Centro de Luanda',
                'description' => 'Opcao conveniente para quem pretende ficar perto do local das actividades e simplificar deslocacoes diarias.',
                'url' => 'https://www.google.com/maps/search/?api=1&query=Hotel+Diamante+Luanda',
                'cta' => 'Ver localizacao',
            ],
            [
                'name' => 'EPIC SANA Luanda Hotel',
                'category' => 'Executivo premium',
                'location' => 'Marginal de Luanda',
                'description' => 'Hotel com perfil corporativo, apropriado para reunioes, estadias executivas e delegacoes institucionais.',
                'url' => 'https://www.google.com/maps/search/?api=1&query=EPIC+SANA+Luanda+Hotel',
                'cta' => 'Explorar hotel',
            ],
            [
                'name' => 'InterContinental Luanda Miramar',
                'category' => 'Vista e conforto',
                'location' => 'Miramar, Luanda',
                'description' => 'Opcao de alto padrao para participantes que procuram conforto adicional e ambiente mais reservado.',
                'url' => 'https://www.google.com/maps/search/?api=1&query=InterContinental+Luanda+Miramar',
                'cta' => 'Abrir mapa',
            ],
            [
                'name' => 'Hotel Alvalade',
                'category' => 'Conveniencia urbana',
                'location' => 'Alvalade, Luanda',
                'description' => 'Alternativa equilibrada para quem valoriza acesso rapido a zonas centrais, aeroporto e servicos urbanos.',
                'url' => 'https://www.google.com/maps/search/?api=1&query=Hotel+Alvalade+Luanda',
                'cta' => 'Ver opcoes',
            ],
            [
                'name' => 'Hotel Tropico',
                'category' => 'Estadia classica',
                'location' => 'Baixa de Luanda',
                'description' => 'Escolha tradicional em Luanda, indicada para participantes que preferem uma localizacao central e pratica.',
                'url' => 'https://www.google.com/maps/search/?api=1&query=Hotel+Tropico+Luanda',
                'cta' => 'Consultar hotel',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.pages.stay-page');
    }
}