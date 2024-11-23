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
        'Back, Abdomen, Spine', 
        'Genitalia', 
        'Anus, Rectum', 
        'Extremities'
    ];
    public $checkedBodyPart = [];
    public $findings = [];

    

    public function mount()
{
    $this->patientID = Session::get('patient_information.personal_information.patient_id', 0);

    Log::info('Patient ID for Physical Examination:', ['patient_id' => $this->patientID]);

   if ($this->patientID) {
        $existingRecord = PhysicalExaminationModel::where('patient_id', $this->patientID)->first();

        if ($existingRecord) {
            foreach ($this->bodyPart as $part) {
                switch ($part) {
                    case 'Skin':
                        $this->findings[$part] = $existingRecord->skin ?? 'NORMAL';
                        break;
                    case 'Head, Neck, Scalp':
                        $this->findings[$part] = $existingRecord->head_neck_scalp ?? 'NORMAL';
                        break;
                    case 'Eyes (External)':
                        $this->findings[$part] = $existingRecord->external_eyes ?? 'NORMAL';
                        break;
                    case 'Pupils Opthalmoscopic':
                        $this->findings[$part] = $existingRecord->pupils_opthalmoscopic ?? 'NORMAL';
                        break;
                    case 'Ears, Nose, Sinuses':
                        $this->findings[$part] = $existingRecord->ears_nose_sinuses ?? 'NORMAL';
                        break;
                    case 'Mouth, Throat':
                        $this->findings[$part] = $existingRecord->mouth_throat ?? 'NORMAL';
                        break;
                    case 'Neck, Lymphnodes, Throid':
                        $this->findings[$part] = $existingRecord->neck_lymphnodes_throid ?? 'NORMAL';
                        break;
                    case 'Chest, Breast, Axilla':
                        $this->findings[$part] = $existingRecord->chest_breast_axilla ?? 'NORMAL';
                        break;
                    case 'Lungs':
                        $this->findings[$part] = $existingRecord->lungs ?? 'NORMAL';
                        break;
                    case 'Heart and Valvular':
                        $this->findings[$part] = $existingRecord->heart_and_valvular ?? 'NORMAL';
                        break;
                    case 'Back, Abdomen, Spine':
                        $this->findings[$part] = $existingRecord->back_and_abdomen ?? 'NORMAL';
                        break;
                    case 'Genitalia':
                        $this->findings[$part] = $existingRecord->genitalia ?? 'NORMAL';
                        break;
                    case 'Anus, Rectum':
                        $this->findings[$part] = $existingRecord->anus_rectum ?? 'NORMAL';
                        break;
                    case 'Extremities':
                        $this->findings[$part] = $existingRecord->extremities ?? 'NORMAL';
                        break;
                }

                if ($this->findings[$part] === 'NORMAL') {
                    $this->checkedBodyPart[] = $part;
                }
            }
        } else {
            foreach ($this->bodyPart as $part) {
                $this->findings[$part] = 'NORMAL';
                $this->checkedBodyPart[] = $part;
            }
        }
    } else {
         foreach ($this->bodyPart as $part) {
            $this->findings[$part] = 'NORMAL';
            $this->checkedBodyPart[] = $part;
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
        $validCheckedParts = array_values(array_intersect($this->checkedBodyPart, $this->bodyPart));
    
        $validFindings = [];
    
        foreach ($this->bodyPart as $part) {
            if (in_array($part, $validCheckedParts)) {
                $validFindings[$part] = 'NORMAL';
            } elseif (!empty($this->findings[$part])) {
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
    Log::info('Patient Information from session: ', Session::get('patient_information'));

    $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? '';

    if (empty($this->patientID)) {
        Log::warning('Patient ID is not set. Cannot save physical examination data.');
        return;
    }

    $examinationData = $this->saveExamination();
    $patientID = $this->patientID; 

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

    $existingRecord = PhysicalExaminationModel::where('patient_id', $patientID)->first();

    if ($existingRecord) {
         $existingRecord->update($dbData);
        Log::info('Updated existing physical examination data for patient ID:', ['patient_id' => $patientID]);
    } else {
        PhysicalExaminationModel::create($dbData);
        Log::info('Created new physical examination data for patient ID:', ['patient_id' => $patientID]);
    }
}


    public function switchToTab($tabId)
    {
        $this->saveToDatabase();
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]);
    }

    public function render()
    {
        return view('livewire.staff.vital-form-section.physical-examination', [
            'patientID' => $this->patientID,
        ]);
    }
}
