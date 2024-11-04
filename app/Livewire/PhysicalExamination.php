<?php

namespace App\Livewire;

use Livewire\Component;

class PhysicalExamination extends Component
{
    public $bodyPart = ['Skin', 'Head, Neck, Scalp', 'Eyes (External)', 'Pupils Opthalmoscopic', 'Ears, Nose, Sinuses', 'Mouth, Throat', 'Neck, Lymphnodes, Throid', 'Chest, Breast, Axilla', 'Lungs', 'Heart and Valvular', 'Back and Abdomen', 'Genitalia', 'Anus, Rectum', 'Extremities'];
    public function render()
    {
        return view('livewire.staff.vital-form-section.physical-examination');
    }
}
