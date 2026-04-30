<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Partners extends Component
{

    public array $partners = [];

    public function mount(): void
    {
        $this->partners = [

            [
                'name' => 'MinTrans',
                'logo' => 'assets/parceiros/angola-gov.jpg',
                'url'  => '#',
            ],
            [
                'name' => 'ENNA-EP',
                'logo' => 'assets/parceiros/enna.jfif',
                'url'  => '#',
            ],
            [
                'name' => 'TAAG-SA',
                'logo' => 'assets/parceiros/taag.jpg',
                'url'  => '#',
            ],
            [
                'name' => 'ROHDE & SCHWARZ',
                'logo' => 'assets/parceiros/rohde_schwarz.png',
                'url'  => '#',
            ],
            [
                'name' => 'Teltech',
                'logo' => 'assets/parceiros/teltech.png',
                'url'  => '#',
            ],
            [
                'name' => 'RNA',
                'logo' => 'assets/parceiros/rna.jpeg',
                'url'  => '#',
            ],
            [
                'name' => 'ACAMS',
                'logo' => 'assets/parceiros/ACAMS_Logo.jpg',
                'url'  => '#',
            ],
            [
                'name' => 'JOTRON',
                'logo' => 'assets/parceiros/jotron.png',
                'url'  => '#',
            ],


            /*  [
                'name' => 'KLIBITY',
                'logo' => 'https://dummyimage.com/520x220/ffffff/0f172a&text=ACAMS',
                'url'  => '#',
            ],
            [
                'name' => 'LANTECH',
                'logo' => 'assets/parceiros/lantech.webp',
                'url'  => '#',
            ],
            [
                'name' => 'THALES',
                'logo' => 'assets/parceiros/thales.png',
                'url'  => '#',
            ], */

        ];
    }



    public function render()
    {
        return view('livewire.components.partners');
    }
}
