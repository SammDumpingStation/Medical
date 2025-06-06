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
    public $patientId;
    public $isPatient = false;

    public function mount()
    {
        $this->patientId = Auth::user()->patient_id;
        
        $this->role = Auth::user()->role;
    
        if ($this->role === 'patient') {
            session()->put('patient_information.personal_information.patient_id', $this->patientId);
    
            $student = Patient::find($this->patientId);
            $this->student = $student ? $student->full_name : null;
    
            Log::info('Patient ID stored in session:', ['patient_id' => $this->patientId]);
        }
    
        session()->put('user.role', $this->role);
        $student = Patient::find($this->patientId);
        $this->student = $student ? $student->full_name : null;
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
