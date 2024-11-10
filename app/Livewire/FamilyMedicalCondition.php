<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class FamilyMedicalCondition extends Component
{
    public $motherConditions = [''];
    public $fatherConditions = [''];

    public function mount() {
        $this->motherConditions = Session::get('patient_information.medical_history.motherConditions') ?? [''];
        $this->fatherConditions = Session::get('patient_information.medical_history.fatherConditions') ?? [''];
    }

    public function buttonClick()
    {
        $this->dispatch('family-condition-data', motherCondition: $this->motherConditions, fatherCondition: $this->fatherConditions);
    }

    public function addMotherCondition()
    {
        $this->motherConditions[] = '';
        $this->buttonClick();
    }

    public function addFatherCondition()
    {
        $this->fatherConditions[] = '';
        $this->buttonClick();
    }

    public function updatedMotherConditions($value, $index)
    {
        $this->motherConditions[$index] = $value;
    }

    public function updatedFatherConditions($value, $index)
    {
        $this->fatherConditions[$index] = $value;
    }
    public function render()
    {
        return view('livewire.staff.hp-form-section.family-medical-condition');
    }
}
