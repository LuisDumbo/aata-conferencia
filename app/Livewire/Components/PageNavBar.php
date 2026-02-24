<?php

namespace App\Livewire\Components;

use Livewire\Component;

class PageNavBar extends Component
{

    public $title;
    public $subtitle;

    
    public function render()
    {
        return view('livewire.components.page-nav-bar');
    }
}
