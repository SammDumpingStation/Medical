<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{

    public $sidebar = true;

    public function showSidebar()
    {
        $this->sidebar = !$this->sidebar;
        // In Livewire 3, dispatch works like this:
        $this->dispatch('toggle-sidebar', sidebar: $this->sidebar);
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
