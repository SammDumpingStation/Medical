<?php

namespace App\Livewire;

use Livewire\Component;

class SidebarList extends Component
{
    public string $label;
    public $icon;
    public string $href;
    public string $active;
    public bool $isDropdown;
    public $menuList;

    public function mount(string $label, $icon, string $href, string $active, bool $isDropdown = false, array $menuList  = [])
    {
        $this->label = $label;
        $this->icon = $icon;
        $this->href = $href;
        $this->active = $active;
        $this->isDropdown = $isDropdown;
        $this->menuList = $menuList;
    }

    public function render()
    {
        return view('livewire.sidebar-list');
    }
}
