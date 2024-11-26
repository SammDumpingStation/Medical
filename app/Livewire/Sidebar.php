<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
{
    public $sidebar = true;
    public $role;

    #[On('toggle-sidebar')]
    public function toggleSidebar($sidebar)
    {
        $this->sidebar = $sidebar;
    }

    public function mount()
    {
        $this->userRole = session()->get('user.role', Auth::user()->role);
    
        session()->put('user.role', $this->userRole);
    
        Log::info('Retrieved ROLE FROM authenticated user:', ['role' => $this->userRole]);
    }
    

    public function navigate()
    {
        request()->session()->forget('patient_information');
    }

    public function render()
    {
        return view('livewire.sidebar', ['userRole' => $this->userRole]);
    }
}
