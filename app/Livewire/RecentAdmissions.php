<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Models\Admission;

class RecentAdmissions extends Component
{
    public $admissions = [];
    public $patientID;

    public function mount()
    {
        // Retrieve the patient ID from the session
        $this->patientID = Session::get('patient_information.patient_id');

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
        $this->saveAdmission();
    }

    public function saveAdmission()
    {
        try {
            // Validate the admissions data
            $this->validate([
                'admissions.*.diagnosis' => 'required|string|max:255',
                'admissions.*.date' => 'required|date',
            ]);

            // Save each admission to the database
            foreach ($this->admissions as $admission) {
                Admission::create([
                    'patient_id' => $this->patientID, // Correctly use $this->patientID
                    'diagnosis' => $admission['diagnosis'],
                    'admission_date' => $admission['date'],
                ]);
            }

            // Flash success message
            session()->flash('message', 'Admissions saved successfully!');

            // Clear session and reset admissions
            Session::forget('patient_information.medical_history.admissions');
            $this->admissions = [['diagnosis' => '', 'date' => '']];

        } catch (\Exception $e) {
            Log::error('Error saving admissions to the database', ['error' => $e->getMessage()]);
            session()->flash('error', 'An error occurred while saving admissions. Please try again.');
        }
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
