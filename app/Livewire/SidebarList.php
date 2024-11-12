<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class SidebarList extends Component
{
    public string $label;
    public $icon;
    public string $href;
    public string $active;
    public bool $isDropdown;
    public $menuList;
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

    public function mount(string $label, $icon, string $href, string $active, bool $isDropdown = false, array $menuList = [])
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
