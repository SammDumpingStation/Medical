<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class PhysicalExamination extends Component
{
    public $bodyPart = ['Skin', 'Head, Neck, Scalp', 'Eyes (External)', 'Pupils Opthalmoscopic', 'Ears, Nose, Sinuses', 'Mouth, Throat', 'Neck, Lymphnodes, Throid', 'Chest, Breast, Axilla', 'Lungs', 'Heart and Valvular', 'Back and Abdomen', 'Genitalia', 'Anus, Rectum', 'Extremities'];
    public $checkedBodyPart = [];
    public $findings = [];

    public function mount()
    {
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
        // Filter checked body parts to include only valid ones from $bodyPart
        $validCheckedParts = array_values(array_intersect($this->checkedBodyPart, $this->bodyPart));

        // Only include findings with non-empty values (abnormal findings)
        $validFindings = array_filter(
            array_intersect_key($this->findings, array_flip($this->bodyPart)),
            fn($finding) => $finding !== '' // Include only non-empty findings
        );

        return [
            'normal' => $validCheckedParts,
            'findings' => $validFindings,
        ];
    }

    public function saveToSession()
    {
        $patient = Session::get('patient_information', []);
        $patient['physical_examination'] = $this->saveExamination();
        Session::put('patient_information', $patient);
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]);
    }

    public function render()
    {
        return view('livewire.staff.vital-form-section.physical-examination');
    }
}
