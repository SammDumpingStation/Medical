<?php

namespace App\Livewire;

use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{

    public $sidebar = true;
    public $student;
    public $role;

    public function mount()
    {
        $userId = Auth::user()->patient_id;
        $student = Patient::find($userId)->full_name;
        $this->student = $student;
        $this->role = Auth::user()->role;
    }

    public function showSidebar()
    {
        $this->sidebar = !$this->sidebar;
        $this->dispatch('toggle-sidebar', sidebar: $this->sidebar);
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
