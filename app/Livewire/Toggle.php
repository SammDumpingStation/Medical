<?php

namespace App\Livewire;

use Livewire\Component;

class Toggle extends Component
{
    public string $title;
    public function mount(string $title = 'Toggle Me')
    {
        $this->title = $title;
    }
    public function render()
    {
        return view('livewire.toggle');
    }
}
