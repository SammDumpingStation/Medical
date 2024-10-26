<?php

namespace App\Livewire;

use Livewire\Component;

class Nav extends Component
{
    public $isVisible = true;
    public function showSidebar()
    {
        $this->isVisible = !$this->isVisible;
    }
    public function render()
    {
        return view('livewire.shared.nav');
    }
}
