<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Onde se Hospedar | 16.ª Reunião da Região África da IFATSEA')]
class StayPage extends Component
{
    public string $title = 'Onde se Hospedar';

    public string $subtitle = 'Sugestões de hotéis em Luanda para delegados, palestrantes e participantes que procuram opções alinhadas ao evento.';

    public array $hotels = [];

    public function mount(): void
    {
        $this->hotels = [
            [
                'name' => 'Hotel Diamante',
                'category' => 'Referência principal',
                'location' => 'Luanda',
                'description' => 'O Hotel Diamante é uma unidade hoteleira de 4 estrelas, situada na Marginal de Luanda (Rua das Kipakas), no centro financeiro e administrativo, inaugurado em 2015 pelo grupo Endiama.',
                'expanded_description' => [
                    'Oferece 174 quartos, restaurante, piscina, spa, ginásio e salas de reuniões, sendo conhecido pela relação qualidade-preço, conforto e localização privilegiada.',
                    'Detalhes principais do Hotel Diamante Luanda: localização na Rua das Kipakas, Marginal, próximo ao Porto de Luanda.',
                    'Acomodações: 174 quartos, incluindo opções Standard, Executivos e Suites com design moderno.',
                    'Serviços e comodidades: piscina, ginásio, spa, restaurante, bar, salas de reuniões, anfiteatro, internet gratuita nas áreas públicas e transfer do aeroporto.',
                    'Experiência: oferece brunch de domingo e pacotes festivos.',
                    'O hotel é focado no conforto de viajantes de negócios e lazer, com o lema "Aqui o nosso hóspede é quem brilha".',
                    'Reservas e contactos: +244 949 902 927 / +244 928 195 360 / +244 923 763 260 | reservas@hoteldiamante.co.ao | hoteldiamante.co.ao',
                ],
                'links' => [
                    [
                        'label' => 'Ver localização',
                        'url' => 'https://www.google.com/maps/search/?api=1&query=Hotel+Diamante+Luanda',
                    ],
                    [
                        'label' => 'Abrir site',
                        'url' => 'https://hoteldiamante.co.ao',
                    ],
                ],
            ],
            [
                'name' => 'Hotel Continental Horizonte',
                'category' => 'Reserva online',
                'location' => 'Luanda',
                'description' => 'Opção adicionada a partir do link enviado para consulta e reserva.',
                'links' => [
                    [
                        'label' => 'Abrir Booking',
                        'url' => 'https://www.booking.com/Share-tXPwox',
                    ],
                ],
            ],
            [
                'name' => 'Hotel Presidente Luanda',
                'category' => 'Site oficial',
                'location' => 'Luanda',
                'description' => 'Ligação direta para o site oficial do hotel.',
                'links' => [
                    [
                        'label' => 'Abrir site oficial',
                        'url' => 'https://www.hotelpresidenteluanda.com/',
                    ],
                ],
            ],
            [
                'name' => 'Skyna Hotel Luanda',
                'category' => 'Reserva online',
                'location' => 'Luanda',
                'description' => null,
                'links' => [
                    [
                        'label' => 'Abrir Booking',
                        'url' => 'https://www.booking.com/Share-X70TWz',
                    ],
                ],
            ],
            [
                'name' => 'RK Suite Hotel',
                'category' => 'Reserva online',
                'location' => 'Luanda',
                'description' => null,
                'links' => [
                    [
                        'label' => 'Abrir Booking',
                        'url' => 'https://www.booking.com/Share-iUsZzFW',
                    ],
                ],
            ],
            [
                'name' => 'EPIC SANA Luanda Hotel',
                'category' => 'Reserva online',
                'location' => 'Luanda',
                'description' => 'Opção incluída na lista enviada para consulta direta em Booking.com.',
                'links' => [
                    [
                        'label' => 'Abrir Booking',
                        'url' => 'https://www.booking.com/Share-f3oFyjc',
                    ],
                ],
            ],
            [
                'name' => 'Hotel Costa',
                'category' => 'Links de consulta',
                'location' => 'Luanda',
                'description' => 'Este hotel foi enviado com mais de uma referência para facilitar a comparação de informações.',
                'links' => [
                    [
                        'label' => 'Abrir TripAdvisor',
                        'url' => 'https://www.tripadvisor.com.br/Hotel_Review-g293763-d6739969-Reviews-Hotel_Costa-Luanda_Luanda_Province.html',
                    ],
                    [
                        'label' => 'Pesquisar no Google',
                        'url' => 'https://www.google.com/search?q=hotel+costa+luanda&ie=UTF-8&oe=UTF-8&hl=pt-ao&client=safari#ebo=0',
                    ],
                ],
            ],
            [
                'name' => 'Aparthotel Tropicana',
                'category' => 'Comparador de tarifas',
                'location' => 'Luanda',
                'description' => 'Ligação adicionada para consulta no Trivago.',
                'links' => [
                    [
                        'label' => 'Abrir Trivago',
                        'url' => 'https://www.trivago.pt/pt/oar/aparthotel-tropicana-luanda?search=100-2239506',
                    ],
                ],
            ],
        ];
    }

    public function render()
    {
        return view('livewire.pages.stay-page');
    }
}