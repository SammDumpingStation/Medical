<?php

namespace App\Livewire;

use Livewire\Component;

class Datepicker extends Component
{
    public string $id;
    public function mount(string $id) {
        $this->id = $id;
    }
    public function render()
    {
        return view('livewire.datepicker');
    }
}
