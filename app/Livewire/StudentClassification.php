<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class StudentClassification extends Component
{
    public $type;
    public $default;
    public function mount()
    {
        $this->default = Session::get('patient_information.student_classification') ?? '';
    }
    public function typeSelect($type)
    {
        $this->type = $type;
    }
    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }

    public function saveToSession()
    {
        $patient = Session::get('patient_information', []);
        $patient['student_classification'] = $this->type;
        Session::put('patient_information', $patient);
    }
    public function render()
    {
        return view('livewire.staff.vital-form-section.student-classification');
    }
}
