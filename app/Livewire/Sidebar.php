<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Sidebar extends Component
{
    public $sidebar = true;

    // Update the event listener name
    #[On('toggle-sidebar')]
    public function toggleSidebar($sidebar)
    {
        $this->sidebar = $sidebar;
    }
    

    public function render()
    {
        return view('livewire.sidebar');
    }
}
