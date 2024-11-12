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
        // Initialize checkedBodyPart with filtered values
        $this->checkedBodyPart = array_values(array_intersect($this->bodyPart, $this->bodyPart));

        // Initialize findings array with empty values for each body part
        foreach ($this->bodyPart as $part) {
            $this->findings[$part] = '';
        }
    }

    #[On('checkbox')]
    public function getCheckbox($data)
    {
        // Add validation to ensure the value is in bodyPart array
        if (!in_array($data['value'], $this->bodyPart)) {
            return;
        }

        if ($data['checked']) {
            if (!in_array($data['value'], $this->checkedBodyPart)) {
                $this->checkedBodyPart[] = $data['value'];
            }
        } else {
            $this->checkedBodyPart = array_values(array_filter(
                $this->checkedBodyPart,
                fn($part) => $part !== $data['value'] && in_array($part, $this->bodyPart)
            ));
            // Clear findings when unchecked
            $this->findings[$data['value']] = '';
        }
    }

    public function saveExamination()
    {
        // Filter to ensure only valid body parts are included
        $validCheckedParts = array_values(array_intersect($this->checkedBodyPart, $this->bodyPart));

        $validFindings = array_filter($this->findings, function ($key) use ($validCheckedParts) {
            return !in_array($key, $validCheckedParts);
        }, ARRAY_FILTER_USE_KEY);

        return [
            'checked_parts' => $validCheckedParts,
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
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }

    public function render()
    {
        return view('livewire.staff.vital-form-section.physical-examination');
    }
}
