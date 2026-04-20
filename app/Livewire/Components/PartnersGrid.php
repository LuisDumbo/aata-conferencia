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
            ['name' => 'RNA',       'logo' => ''],
            ['name' => 'ACAMS',     'logo' => 'assets/parceiros/ACAMS_Logo.jpg'],
            ['name' => 'JOTRON',    'logo' => 'assets/parceiros/jotron.png'],
            ['name' => 'CAIEC',     'logo' => ''],
            ['name' => 'Marave',    'logo' => ''],
            ['name' => 'KLIBITY',   'logo' => ''],
            ['name' => 'LANTECH',   'logo' => 'assets/parceiros/lantech.webp'],
            ['name' => 'CALLWAVE',  'logo' => 'assets/parceiros/callwave.png'],
            ['name' => 'THALES',    'logo' => 'assets/parceiros/thales.png'],
        ];

        return view('livewire.components.partners-grid', compact('partners'));
    }
}
