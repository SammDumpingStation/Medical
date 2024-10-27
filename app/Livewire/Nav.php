<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Nav extends Component
{
    public $isVisible = true;
    public function showSidebar()
    {
        $this->isVisible = !$this->isVisible;
    }
    public function home()
    {
        $role = Auth::user()->role;
        redirect()->intended('/' . $role);
    }
    public function render()
    {
        return view('livewire.shared.nav');
    }
}
