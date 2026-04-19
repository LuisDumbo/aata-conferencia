<?php

namespace App\Livewire\Components;

use App\Traits\DownloadFile;
use Livewire\Component;

class HeroBanner extends Component
{

    use DownloadFile;
    
    public function render()
    {
        return view('livewire.components.hero-banner');
    }
}
