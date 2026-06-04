<?php

namespace App\Livewire\Components;

use Livewire\Component;

class PartnersGrid extends Component
{
    public function render()
    {
        $partners = [
            ['name' => 'MinTrans',  'logo' => 'assets/parceiros/angola-gov.jpg', 'url'  => 'https://www.mintrans.gov.ao/'],
            ['name' => 'ENNA-EP',   'logo' => 'assets/parceiros/enna.jfif'],
            ['name' => 'TAAG-SA',   'logo' => 'assets/parceiros/taag.jpg', 'url'  => 'https://flytaag.com/en/-TAAG-Book-Flight-Hotel-and-Online-Check-in'],
            ['name' => 'ROHDE & SCHWARZ',   'logo' => 'assets/parceiros/rohde_schwarz.png', 'url'  => 'https://www.rohde-schwarz.com/us/home_48230.html'],
            ['name' => 'Teltech',   'logo' => 'assets/parceiros/teltech.png', 'url'  => 'https://teltech.com.na/'],
            ['name' => 'RNA',       'logo' => 'assets/parceiros/rna.jpeg',  'url'  => 'https://rna.ao/rna.ao/'],
            ['name' => 'ACAMS',     'logo' => 'assets/parceiros/ACAMS_Logo.jpg',  'url'  => 'https://acams.com/solutions/',],
            ['name' => 'JOTRON',    'logo' => 'assets/parceiros/jotron.png', 'url' => 'https://www.jotron.com/'],

            ['name' => 'KLIBITY',   'logo' => 'assets/parceiros/kbility.png',  'url'  => 'https://kbility.com/en/services/'],
            ['name' => 'MARAVE',   'logo' => 'assets/parceiros/marave.png',  'url'  => 'https://marave.net/'],
            ['name' => 'LANTECH',   'logo' => 'assets/parceiros/lantech.png'],
            ['name' => 'EASA',    'logo' => 'assets/parceiros/easa.png', 'url'  => 'https://www.easa.ac.ke/'],
            ['name' => 'CAA',    'logo' => 'assets/parceiros/CAA.png', 'url'  => 'https://caa.go.ug/'],
            ['name' => 'ATNS',    'logo' => 'assets/parceiros/ATNS.png',  'url'  => 'https://atns.com/',],

        ];

        return view('livewire.components.partners-grid', compact('partners'));
    }
}
