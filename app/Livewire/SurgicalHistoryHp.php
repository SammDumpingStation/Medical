<?php

namespace App\Livewire;

use Livewire\Component;

class SurgicalHistoryHp extends Component
{
    public function switchToTab($tabId)
    {
        $this->dispatch('switch-tab', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }
    public function render()
    {
        return view('livewire.staff.hp-form-section.surgical-history-hp');
    }
}
