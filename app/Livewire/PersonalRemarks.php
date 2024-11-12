<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class PersonalRemarks extends Component
{
    public $patientID;

    public function mount()
    {
        $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? 0;
    }
    public function switchToTab($tabId)
    {
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }
    public function render()
    {
        return view('livewire.staff.vital-form-section.personal-remarks');
    }
}
