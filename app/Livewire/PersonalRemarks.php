<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log; // Import the Log facade
use Livewire\Component;
use App\Models\PersonalRemarksModel;

class PersonalRemarks extends Component
{
    public $patientID;
    public $gender;
    public $diagnosis = ''; // Initialize diagnosis property
    public $remarks = '';   // Initialize remarks property

    public function mount()
    {
        // Set patientID and gender from session
        $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? 0;
        $this->gender = Session::get('patient_information.personal_information.gender') ?? '';
    }

    public function switchToTab($tabId)
    {
        // Save the personal remarks before switching tab
        $this->savePersonalRemarks();
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }

    public function savePersonalRemarks()
    {
        // Validate input fields
        $this->validate([
            'diagnosis' => 'required|string',
            'remarks' => 'required|string',
        ]);

        // Prepare data to be saved
        $data = [
            'patient_id' => $this->patientID,
            'diagnosis' => $this->diagnosis,
            'remarks' => $this->remarks,
        ];

        // Log the data being saved
        Log::info('Saving personal remarks to the database', $data);

        try {
            // Save data to the database using the PersonalRemarksModel
            PersonalRemarksModel::create($data);

            // Show success message
            session()->flash('message', 'Personal remarks saved successfully.');

            // Clear form fields after successful save
            $this->reset(['diagnosis', 'remarks']);
        } catch (\Exception $e) {
            // Log the error if saving fails
            Log::error('Error saving personal remarks: ' . $e->getMessage());
        }
    }

    public function render()
    {
        // Render the livewire component view
        return view('livewire.staff.vital-form-section.personal-remarks');
    }
}
