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


            [
                'name' => 'KLIBITY',
                'logo' =>  'assets/parceiros/kbility.png',
                'url'  => '#',
            ],
            [
                'name' => 'MARAVE',
                'logo' =>  'assets/parceiros/marave.png',
                'url'  => '#',
            ],
            [
                'name' => 'LANTECH',
                'logo' => 'assets/parceiros/lantech.png',
                'url'  => '#',
            ],
            [
                'name' => 'EASA',
                'logo' => 'assets/parceiros/easa.png',
                'url'  => '#',
            ],
            [
                'name' => 'CAA',
                'logo' => 'assets/parceiros/CAA.png',
                'url'  => '#',
            ],
            [
                'name' => 'ATNS',
                'logo' => 'assets/parceiros/ATNS.png',
                'url'  => '#',
            ],

        ];
    }



    public function render()
    {
        return view('livewire.components.partners');
    }
}
