<?php

namespace App\Livewire;

use Livewire\Component;

class PhysicalScreening extends Component
{
    public $patient;
    public function mount($patient) {
        $this->patient = $patient;
    }
    public function render()
    {
        return view('livewire.staff.vital-form-section.physical-screening');
    }
}
