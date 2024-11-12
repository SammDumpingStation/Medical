<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class RecentAdmissions extends Component
{public $admissions = [];

    public function mount()
    {
        // Initialize with saved data or one empty admission
        $this->admissions = Session::get('patient_information.medical_history.admissions') ?? [
            ['diagnosis' => '', 'date' => '']
        ];
    }

    public function updatedAdmissions($value, $key)
    {
        // Parse the key to get index and field (e.g., "0.diagnosis" or "0.date")
        list($index, $field) = explode('.', $key);

        // Ensure both fields exist for this index
        if (!isset($this->admissions[$index])) {
            $this->admissions[$index] = ['diagnosis' => '', 'date' => ''];
        }

        // Update the specific field while preserving the other
        $this->admissions[$index][$field] = $value;

        // Save to session after each update
        $this->saveToSession();
    }

    public function addAdmission()
    {
        $this->admissions[] = ['diagnosis' => '', 'date' => ''];
        $this->saveToSession();
    }

    protected function saveToSession()
    {
        Session::put('patient_information.medical_history.admissions', $this->admissions);
        $this->dispatch('recent-admission-data', admissions: $this->admissions);
    }
    public function render()
    {
        return view('livewire.staff.hp-form-section.recent-admissions');
    }
}
