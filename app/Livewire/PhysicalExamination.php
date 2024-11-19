<?php

namespace App\Livewire;

use App\Models\PhysicalExaminationModel;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class PhysicalExamination extends Component
{
    public $patientID;

    public $bodyPart = [
        'Skin', 
        'Head, Neck, Scalp', 
        'Eyes (External)', 
        'Pupils Opthalmoscopic', 
        'Ears, Nose, Sinuses', 
        'Mouth, Throat', 
        'Neck, Lymphnodes, Throid', 
        'Chest, Breast, Axilla', 
        'Lungs', 
        'Heart and Valvular', 
        'Back and Abdomen', 
        'Genitalia', 
        'Anus, Rectum', 
        'Extremities'
    ];
    public $checkedBodyPart = [];
    public $findings = [];

    

    public function mount()
    {
       // Log the entire session or just the specific key to ensure it's available
    Log::info('Patient Information from session: ', Session::get('patient_information'));

    // Retrieve patient_id
    $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? '';

    Log::info('Retrieved patient_id in mount: ' . $this->patientID);
        // Get existing data from session if it exists
        $patientInfo = Session::get('patient_information', []);
        $physicalExam = $patientInfo['physical_examination'] ?? null;

        if ($physicalExam) {
            // Set checked body parts from session
            $this->checkedBodyPart = $physicalExam['normal'] ?? [];

            // Initialize findings with session data or empty strings
            foreach ($this->bodyPart as $part) {
                $this->findings[$part] = $physicalExam['findings'][$part] ?? '';
            }
        } else {
            // If no session data, initialize with empty values
            foreach ($this->bodyPart as $part) {
                $this->findings[$part] = '';
            }
        }
    }

    #[On('checkbox')]
    public function getCheckbox($data)
    {
        if (!in_array($data['value'], $this->bodyPart)) {
            return;
        }

        if ($data['checked']) {
            if (!in_array($data['value'], $this->checkedBodyPart)) {
                $this->checkedBodyPart[] = $data['value'];
                // Clear findings when marked as normal
                $this->findings[$data['value']] = '';
            }
        } else {
            $this->checkedBodyPart = array_values(array_filter(
                $this->checkedBodyPart,
                fn($part) => $part !== $data['value'] && in_array($part, $this->bodyPart)
            ));
        }
    }

    public function saveExamination()
    {
        // Include checked body parts as NORMAL
        $validCheckedParts = array_values(array_intersect($this->checkedBodyPart, $this->bodyPart));
    
        // Initialize findings with NORMAL for checked body parts
        $validFindings = [];
    
        foreach ($this->bodyPart as $part) {
            if (in_array($part, $validCheckedParts)) {
                // If body part is checked, set it to NORMAL
                $validFindings[$part] = 'NORMAL';
            } elseif (!empty($this->findings[$part])) {
                // If body part is not checked but has a specific finding, use it
                $validFindings[$part] = $this->findings[$part];
            }
        }
    
        return [
            'normal' => $validCheckedParts,
            'findings' => $validFindings,
        ];
    }
    

    public function saveToDatabase()
    {

    
    // Log the entire session or just the specific key to ensure it's available
    Log::info('Patient Information from session: ', Session::get('patient_information'));

    // Retrieve patient_id
    $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? '';


        $examinationData = $this->saveExamination();
        $patientID = $this->patientID; // Ensure the correct patient ID is used

      
        // Map body parts to the respective database columns
        $dbData = [
            'patient_id' => $patientID,
            'skin' => $examinationData['findings']['Skin'] ?? null,
            'head_neck_scalp' => $examinationData['findings']['Head, Neck, Scalp'] ?? null,
            'external_eyes' => $examinationData['findings']['Eyes (External)'] ?? null,
            'pupils_opthalmoscopic' => $examinationData['findings']['Pupils Opthalmoscopic'] ?? null,
            'ears_nose_sinuses' => $examinationData['findings']['Ears, Nose, Sinuses'] ?? null,
            'mouth_throat' => $examinationData['findings']['Mouth, Throat'] ?? null,
            'neck_lymphnodes_throid' => $examinationData['findings']['Neck, Lymphnodes, Throid'] ?? null,
            'chest_breast_axilla' => $examinationData['findings']['Chest, Breast, Axilla'] ?? null,
            'lungs' => $examinationData['findings']['Lungs'] ?? null,
            'heart_and_valvular' => $examinationData['findings']['Heart and Valvular'] ?? null,
            'back_and_abdomen' => $examinationData['findings']['Back and Abdomen'] ?? null,
            'genitalia' => $examinationData['findings']['Genitalia'] ?? null,
            'anus_rectum' => $examinationData['findings']['Anus, Rectum'] ?? null,
            'extremities' => $examinationData['findings']['Extremities'] ?? null,
        ];

        // Save to the database
        PhysicalExaminationModel::create($dbData);
    }

    public function switchToTab($tabId)
    {
        $this->saveToDatabase(); // Save data before switching tab
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]);
    }

    public function render()
    {
        return view('livewire.staff.vital-form-section.physical-examination', [
            'patientID' => $this->patientID,
        ]);
    }
}
