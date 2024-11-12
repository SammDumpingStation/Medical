<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class AncillaryExamination extends Component
{
    public $examinations = ['Complete Blood Count', 'Fecalysis/Stool Exam', 'Urinalysis', 'Chest X-RAY', 'MMSE Score'];
    public $pregnancy = false, $hepb = 'Non-reactive', $blood_type;
    public $checkedExamination = [];
    public $findings = [];

    public function mount()
    {
        // Initialize checkedExamination with all values since they start checked
        $this->checkedExamination = array_values(array_intersect($this->examinations, $this->examinations));
        foreach ($this->examinations as $part) {
            $this->findings[$part] = '';
        }
        $this->pregnancy = Session::get('patient_information.ancillary_information.pregnancy_test' ?? false);
        $this->hepb = Session::get('patient_information.ancillary_information.hepb' ?? 'Non-reactive');
        $this->blood_type = Session::get('patient_information.ancillary_information.blood_type' ?? '');
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
        // Validate that the incoming value exists in examinations array
        if (!in_array($data['value'], $this->examinations)) {
            return;
        }

        if ($data['checked']) {
            if (!in_array($data['value'], $this->checkedExamination)) {
                $this->checkedExamination[] = $data['value'];
            }
        } else {
            $this->checkedExamination = array_values(array_filter(
                $this->checkedExamination,
                fn($part) => $part !== $data['value'] && in_array($part, $this->examinations)
            ));
        }
    }

    public function saveToSession()
    {
        // Filter to ensure only valid body parts are included
        $validCheckedParts = array_values(array_intersect($this->checkedExamination, $this->examinations));

        $validFindings = array_filter($this->findings, function ($key) use ($validCheckedParts) {
            return !in_array($key, $validCheckedParts);
        }, ARRAY_FILTER_USE_KEY);

        $patient = Session::get('patient_information', []);
        $patient['ancillary_examination'] = [
            'normal' => $validCheckedParts,
            'findings' => $validFindings,
            'pregnancy_test' => $this->pregnancy ?? 'Negative',
            'hepb' => $this->hepb ?? 'Non-reactive',
            'blood_type' => $this->blood_type ?? 'O',
        ];
        Session::put('patient_information', $patient);
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }

    public function render()
    {
        return view('livewire.staff.vital-form-section.ancillary-examination');
    }
}
