<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Horizontalnav extends Component
{
    public $user;
    public $role;
    public function mount()
    {
        $this->user = Auth::user();
        $this->role = Auth::user()->role;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.shared.horizontal-nav');
    }
}
