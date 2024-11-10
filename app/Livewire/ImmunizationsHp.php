<?php

namespace App\Livewire;

use Livewire\Component;

class ImmunizationsHp extends Component
{
    public $patientID;
    public function mount($patientID)
    {
        $this->patientID = $patientID;
    }
    public function switchToTab($tabId)
    {
        $this->dispatch('switch-tab', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }
    public function render()
    {
        return view('livewire.staff.hp-form-section.immunizations-hp');
    }
}
