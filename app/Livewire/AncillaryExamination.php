<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class AncillaryExamination extends Component
{
    public $examinations = ['Complete Blood Count', 'Fecalysis/Stool Exam', 'Urinalysis', 'Chest X-RAY', 'MMSE Score'];
    public $pregnancy = 'Negative';
    public $hepb = 'Non-reactive';
    public $blood_type;
    public $checkedExamination = [];
    public $findings = [];

    public function mount()
    {
        // Get existing data from session if it exists
        $patientInfo = Session::get('patient_information', []);
        $ancillaryExam = $patientInfo['ancillary_examination'] ?? null;

        if ($ancillaryExam) {
            // Set checked examinations from session
            $this->checkedExamination = $ancillaryExam['normal'] ?? [];

            // Initialize findings with session data or empty strings
            foreach ($this->examinations as $exam) {
                $this->findings[$exam] = $ancillaryExam['findings'][$exam] ?? '';
            }

            // Set other examination values from session
            $this->pregnancy = $ancillaryExam['pregnancy_test'] ?? false;
            $this->hepb = $ancillaryExam['hepb'] ?? 'Non-reactive';
            $this->blood_type = $ancillaryExam['blood_type'] ?? '';
        } else {
            // If no session data, initialize with default values
            foreach ($this->examinations as $exam) {
                $this->findings[$exam] = '';
            }
            $this->checkedExamination = $this->examinations; // All checked by default
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
                // Clear findings when marked as normal
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

        // Keep all findings, both empty and filled
        $validFindings = array_intersect_key($this->findings, array_flip($this->examinations));

        return [
            'normal' => $validCheckedParts,
            'findings' => $validFindings,
            'pregnancy_test' => $this->pregnancy,
            'hepb' => $this->hepb,
            'blood_type' => $this->blood_type,
        ];
    }

    public function saveToSession()
    {
        $patient = Session::get('patient_information', []);
        $patient['ancillary_examination'] = $this->saveExamination();
        Session::put('patient_information', $patient);
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]);
    }

    public function render()
    {
        return view('livewire.staff.vital-form-section.ancillary-examination');
    }
}
