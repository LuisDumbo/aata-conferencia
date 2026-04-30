<?php

namespace App\Livewire\Components;

use Livewire\Component;

class PartnersGrid extends Component
{
    public function render()
    {
        $partners = [
            ['name' => 'MinTrans',  'logo' => 'assets/parceiros/angola-gov.jpg'],
            ['name' => 'ENNA-EP',   'logo' => 'assets/parceiros/enna.jfif'],
            ['name' => 'TAAG-SA',   'logo' => 'assets/parceiros/taag.jpg'],
            ['name' => 'ROHDE & SCHWARZ',   'logo' => 'assets/parceiros/rohde_schwarz.png'],
            ['name' => 'Teltech',   'logo' => 'assets/parceiros/teltech.png'],
            ['name' => 'RNA',       'logo' => 'assets/parceiros/rna.jpeg'],
            ['name' => 'ACAMS',     'logo' => 'assets/parceiros/ACAMS_Logo.jpg'],
            ['name' => 'JOTRON',    'logo' => 'assets/parceiros/jotron.png'],

            /*  ['name' => 'KLIBITY',   'logo' => ''],
            ['name' => 'LANTECH',   'logo' => 'assets/parceiros/lantech.webp'],
            ['name' => 'THALES',    'logo' => 'assets/parceiros/thales.png'],
       */
        ];

        return view('livewire.components.partners-grid', compact('partners'));
    }
}
