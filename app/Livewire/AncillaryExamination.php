<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Log;
use App\Models\AncillaryExaminationsModel;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class AncillaryExamination extends Component
{
    public $patientID;
    public $examinations = ['Complete Blood Count', 'Fecalysis/Stool Exam', 'Urinalysis', 'Chest X-RAY', 'MMSE Score'];
    public $pregnancy = 'Negative';
    public $hepb = 'Non-reactive';
    public $blood_type;
    public $checkedExamination = [];
    public $findings = [];

    public function mount()
    {
        $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? '';

         $existingRecord = AncillaryExaminationsModel::where('patient_id', $this->patientID)->first();

        if ($existingRecord) {
            foreach ($this->examinations as $exam) {
                $column = $this->mapExaminationToColumn($exam);
                $value = $existingRecord->$column;

                if ($value === 'Normal') {
                    $this->checkedExamination[] = $exam;
                    $this->findings[$exam] = '';
                } else {
                    $this->findings[$exam] = $value ?? '';
                }
            }

            $this->pregnancy = $existingRecord->pregnancy_test ?? 'Negative';
            $this->hepb = $existingRecord->hep_b ?? 'Non-reactive';
            $this->blood_type = $existingRecord->blood_type ?? '';
        } else {
            foreach ($this->examinations as $exam) {
                $this->findings[$exam] = '';
            }
            $this->checkedExamination = $this->examinations;
        }
    }

    #[On('radioSelected')]
    public function getRadio($name, $value)
    {
        if ($name === 'pregnancy') {
            $this->pregnancy = $value;
        } elseif ($name === 'hepb') {
            $this->hepb = $value;
        }
    }

    #[On('checkbox')]
    public function getCheckbox($data)
    {
        if (!in_array($data['value'], $this->examinations)) {
            return;
        }

        if ($data['checked']) {
            if (!in_array($data['value'], $this->checkedExamination)) {
                $this->checkedExamination[] = $data['value'];
                 $this->findings[$data['value']] = '';
            }
        } else {
            $this->checkedExamination = array_values(array_filter(
                $this->checkedExamination,
                fn($exam) => $exam !== $data['value'] && in_array($exam, $this->examinations)
            ));
        }
    }

    public function saveExamination()
    {
        $validCheckedParts = array_values(array_intersect($this->checkedExamination, $this->examinations));

        $validFindings = array_intersect_key($this->findings, array_flip($this->examinations));

        return [
            'normal' => $validCheckedParts,
            'findings' => $validFindings,
            'pregnancy_test' => $this->pregnancy,
            'hepb' => $this->hepb,
            'blood_type' => $this->blood_type,
        ];

    }


public function saveToDatabase()
{
    // Log that the saveToDatabase method has been called
    Log::info('saveToDatabase method started for patient ID: ' . $this->patientID);

    // Save examination data
    $examinationData = $this->saveExamination();
    Log::info('Examination data saved for patient ID: ' . $this->patientID, ['examinationData' => $examinationData]);

    // Set patient ID
    $patientID = $this->patientID;

    // Prepare data for insertion or update
    $dbData = [
        'patient_id' => $patientID,
        'complete_blood_count' => in_array('Complete Blood Count', $this->checkedExamination) ? 'Normal' : ($examinationData['findings']['Complete Blood Count'] ?? null),
        'fecalysis' => in_array('Fecalysis/Stool Exam', $this->checkedExamination) ? 'Normal' : ($examinationData['findings']['Fecalysis/Stool Exam'] ?? null),
        'urinalysis' => in_array('Urinalysis', $this->checkedExamination) ? 'Normal' : ($examinationData['findings']['Urinalysis'] ?? null),
        'chest_xray' => in_array('Chest X-RAY', $this->checkedExamination) ? 'Normal' : ($examinationData['findings']['Chest X-RAY'] ?? null),
        'mmse_score' => in_array('MMSE Score', $this->checkedExamination) ? 'Normal' : ($examinationData['findings']['MMSE Score'] ?? null),
        'pregnancy_test' => $examinationData['pregnancy_test'],
        'hep_b' => $examinationData['hepb'],
        'blood_type' => $examinationData['blood_type'],
    ];

    // Log the prepared data
    Log::info('Prepared data for database', ['dbData' => $dbData]);

    // Check if there's an existing record for this patient
    $existingRecord = AncillaryExaminationsModel::where('patient_id', $patientID)->first();

    if ($existingRecord) {
        // Log the update action
        Log::info('Updating existing record for patient ID: ' . $patientID);
        $existingRecord->update($dbData);
        Log::info('Record updated successfully for patient ID: ' . $patientID);
    } else {
        // Log the creation action
        Log::info('Creating new record for patient ID: ' . $patientID);
        AncillaryExaminationsModel::create($dbData);
        Log::info('Record created successfully for patient ID: ' . $patientID);
    }

    // Log that the method has completed
    Log::info('saveToDatabase method completed for patient ID: ' . $this->patientID);

    session()->flash('message', 'Saved Successfully!.');
}

    public function switchToTab($tabId)
    {
        $this->saveToDatabase();
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]);
    }

    public function render()
    {
        return view('livewire.staff.vital-form-section.ancillary-examination', [
            'patientID' => $this->patientID,
        ]);
    }

    private function mapExaminationToColumn($examination)
    {
        return match ($examination) {
            'Complete Blood Count' => 'complete_blood_count',
            'Fecalysis/Stool Exam' => 'fecalysis',
            'Urinalysis' => 'urinalysis',
            'Chest X-RAY' => 'chest_xray',
            'MMSE Score' => 'mmse_score',
            default => null,
        };
    }
}
