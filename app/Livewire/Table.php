<?php

namespace App\Livewire;

use Livewire\Component;

class Table extends Component
{
    public bool $isDashboard = false;
    
    public function render()
    {
        return view('livewire.table');
    }
}
