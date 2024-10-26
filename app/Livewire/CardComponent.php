<?php

namespace App\Livewire;

use Livewire\Component;

class CardComponent extends Component
{
    public $title;
    public function render()
    {
        return view('livewire.shared.card-component');
    }
}
