<?php

namespace App\Livewire;

use Livewire\Component;

class CheckUp extends Component
{
    public $result;
    public function render()
    {
        return view('livewire.nurse.check-up');
    }
}
