<?php

namespace App\Livewire;

use Livewire\Component;

class SidebarList extends Component
{
    public string $label;
    public $icon;
    public string $href;
    public string $active;


    public function mount(string $label, $icon, string $href, string $active) {
        $this->label = $label;
        $this->icon = $icon;
        $this->href = $href;
        $this->active = $active;
    }

    public function render()
    {
        return view('livewire.sidebar-list');
    }
}
