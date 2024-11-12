<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class HealthProfileForm1 extends Component
{
    public $personal_information, $social_history, $medical_history, $surgical_history, $immunizations, $ancillary_examination;
    public function mount()
    { //medical_history , personal_information, social_history
        $this->ancillary_examination = Session::get('patient_information.ancillary_examination');
    }
    public function render()
    {
        return view('livewire.staff.printable-forms.health-profile-form1');
    }
}
