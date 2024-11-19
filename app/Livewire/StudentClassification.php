<?php

namespace App\Livewire;

use App\Models\StudentClassificationModel;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class StudentClassification extends Component
{
    public $type;
    public $default;
    public $patientID;
    public $successMessage = null; 

    public function mount()
    {
        $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? '';

       $this->default = Session::get('patient_information.student_classification') ?? '';
    }

    public function typeSelect($type)
    {
        $this->type = $type;
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->saveToDatabase(); 
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]); 
    }

    public function saveToSession()
    {
        $patient = Session::get('patient_information', []);
        $patient['student_classification'] = $this->type;

        Session::put('patient_information', $patient);
    }

    public function saveToDatabase()
    {
        try {
            $data = [
                'patient_id' => $this->patientID,
                'alphabet' => $this->type,
                'description' => $this->getDescriptionByType($this->type), 
            ];

           $existingRecord = StudentClassificationModel::find($this->patientID);
            if ($existingRecord) {
                $existingRecord->update($data);
            } else {
                 StudentClassificationModel::create($data);
            }

            $this->successMessage = 'Student Classification successfully saved!';
        } catch (\Exception $e) {
            $this->successMessage = 'Error saving Student Classification.';
        }
    }

    public function getDescriptionByType($type)
    {
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
