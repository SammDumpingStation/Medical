<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class RecentAdmissions extends Component
{
    // Array to hold each admission entry
    public $admissions = [
        ['diagnosis' => '', 'date' => ''],
    ];

    public function mount()
    {
        $this->admissions = Session::get('patient_information.medical_history.admissions') ?? [''];
    }

    public function buttonClick()
    {
        $this->dispatch('recent-admission-data', admissions: $this->admissions);
    }
    // Method to add a new admission entry
    public function addAdmission()
    {
        $this->admissions[] = ['diagnosis' => '', 'date' => ''];
        $this->buttonClick();
    }

    // Update diagnosis in a specific admission entry
    public function updatedAdmissions($value, $key)
    {
        list($index, $field) = explode('.', $key);
        $this->admissions[$index][$field] = $value;
    }

    public function render()
    {
        return view('livewire.staff.hp-form-section.recent-admissions');
    }
}
