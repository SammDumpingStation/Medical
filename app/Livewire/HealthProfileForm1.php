<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class HealthProfileForm1 extends Component
{
    public $personal_information, $emergency_contact, $social_history, $medical_history, $recentAdmissions, $surgical_history, $immunizations;
    public function mount()
    {
        $this->personal_information = Session::get('patient_information.personal_information');
        $this->social_history = Session::get('patient_information.social_history');
        $this->medical_history = Session::get('patient_information.medical_history');
        $this->surgical_history = Session::get('patient_information.surgical_history');
        $this->immunizations = Session::get('patient_information.immunizations');
        $this->emergency_contact = Session::get('patient_information.emergency_contact');
        $this->recentAdmissions = Session::get('patient_information.recentAdmissions');

    }
    public function render()
    {
        return view('livewire.staff.printable-forms.health-profile-form1');
    }
}
