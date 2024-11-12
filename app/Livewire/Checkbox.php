<?php

namespace App\Livewire;

use Livewire\Component;

class Checkbox extends Component
{
    public string $id;
    public string $value;
    public string $title;
    public bool $isChecked = true;

    public function mount()
    {
        // Get the current physical examination data from session
        $patientInfo = session('patient_information', []);
        $physicalExam = $patientInfo['physical_examination'] ?? null;
        $ancillaryExam = $patientInfo['ancillary_examination'] ?? null;

        if ($physicalExam) {
            // Check if this body part is marked as normal
            $this->isChecked = in_array($this->value, $physicalExam['normal'] ?? []);
        }
        if ($ancillaryExam) {
            // Check if this body part is marked as normal
            $this->isChecked = in_array($this->value, $ancillaryExam['normal'] ?? []);
        }

    }

    public function updating($name, $value)
    {
        $this->dispatch('checkbox', [
            'value' => $this->value,
            'checked' => $value,
        ]);
    }

    public function render()
    {
        return view('livewire.checkbox');
    }
}
