<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Medical Records')]
class MedicalRecord extends Component
{
    public $sidebar_patients;
    public function render()
    {
        return view('livewire.nurse.medical-record');
    }
}
