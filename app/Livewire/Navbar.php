<?php

namespace App\Livewire;

use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Navbar extends Component
{

    public $sidebar = true;
    public $student;
    public $role;

    public function mount()
    {
        $this->patientId = Auth::user()->patient_id;

        $student = Patient::find($this->patientId);

        session()->put('patient_information.personal_information.patient_id', $this->patientId);

        Log::info('Retrieved patient ID from authenticated user:', ['patient_id' => $this->patientId]);

        $this->student = $student ? $student->full_name : null;
        $this->role = Auth::user()->role;

        session()->put('user.role', $this->role);
        
        $this->isPatient = $this->role === 'patient';
        Log::info('User role retrieved:', ['role' => $this->role, 'isPatient' => $this->isPatient]);

    }

    public function showSidebar()
    {
        $this->sidebar = !$this->sidebar;
        $this->dispatch('toggle-sidebar', sidebar: $this->sidebar);
    }

    public function render()
    {
        return view('livewire.navbar', [
            'patientId' => $this->patientId,
            'isPatient' => $this->isPatient,
        ]);
    }
}
