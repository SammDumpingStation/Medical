<?php

namespace App\Livewire;

use App\Models\StudentClassificationModel; // Include the model for database interaction
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class StudentClassification extends Component
{
    public $type;
    public $default;
    public $patientID;
    public $successMessage = null; // Property to hold success message

    public function mount()
    {
        // Retrieve patient ID from the session
        $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? '';

        // Retrieve the default student classification from the session
        $this->default = Session::get('patient_information.student_classification') ?? '';
    }

    public function typeSelect($type)
    {
        $this->type = $type;
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->saveToDatabase(); // Save the data to the database
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }

    public function saveToSession()
    {
        // Retrieve current session data
        $patient = Session::get('patient_information', []);
        $patient['student_classification'] = $this->type;

        // Save updated session data
        Session::put('patient_information', $patient);
    }

    public function saveToDatabase()
    {
        try {
            // Prepare data for database insertion
            $data = [
                'patient_id' => $this->patientID,
                'alphabet' => $this->type, // Assuming 'alphabet' is the classification type
                'description' => $this->getDescriptionByType($this->type), // Add a description if necessary
            ];

            // Check if a record with the same patient_id exists
            $existingRecord = StudentClassificationModel::find($this->patientID);
            if ($existingRecord) {
                // If the record exists, update it
                $existingRecord->update($data);
            } else {
                // If the record does not exist, create a new one
                StudentClassificationModel::create($data);
            }

            // Set success message after saving
            $this->successMessage = 'Student Classification successfully saved!';
        } catch (\Exception $e) {
            // Handle any exceptions (optional)
            $this->successMessage = 'Error saving Student Classification.';
        }
    }

    public function getDescriptionByType($type)
    {
        // Example logic for returning a description based on the classification type
        switch ($type) {
            case 'A':
                return 'Medically, physically, and mentally FIT for ANY WORK or STUDY';
            case 'B':
                return 'Physically under-developed or with corrective defects, but otherwise FIT TO WORK or STUDY';
            case 'C':
                return 'Can study but requiring special placement or limited duty in specified assignments';
            default:
                return 'Other';
        }
    }

    public function render()
    {
        return view('livewire.staff.vital-form-section.student-classification');
    }
}
