<?php

namespace App\Livewire;

use Livewire\Component;

class Toggle extends Component
{
    public $title;
    public $state;
    public $checked;

    public function toggle()
    {
        $this->dispatch('toggle-data', title: $this->title, state: $this->state);
    }

    public function mount(string $title = 'Toggle Me', $checked = false, $state = false)
    {
        $this->title = $title;
        $this->state = $state;
        $this->checked = !$checked ? false : true;
    }
    public function render()
    {
        return view('livewire.toggle');
    }
}
