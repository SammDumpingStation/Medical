<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Sidebar extends Component
{
    public $sidebar = true;

    #[On('toggle-sidebar')]
    public function toggleSidebar($sidebar)
    {
        $this->sidebar = $sidebar;
    }

    public function navigate()
    {
        request()->session()->forget('patient_information');
    }

    public function render()
    {
        return view('livewire.sidebar');
    }
}
