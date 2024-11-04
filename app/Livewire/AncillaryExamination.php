<?php

namespace App\Livewire;

use Livewire\Component;

class AncillaryExamination extends Component
{
    public $examinations = ['Complete Blood Count', 'Fecalysis/Stool Exam', 'Urinalysis', 'Chest X-RAY', 'MMSE Score'];
    public function render()
    {
        return view('livewire.staff.vital-form-section.ancillary-examination');
    }
}
