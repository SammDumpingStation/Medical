<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SurgicalHistoryHp extends Component
{
    public $operations = [];
    public $type;
    public $date;

    public function mount()
    {
        // Check if operations data is in session, if so load it, otherwise initialize with default
        $this->operations = Session::get('patient_information.operations', [
            ['type' => '', 'date' => ''],
        ]);
    }

    public function addOperation()
    {
        $this->operations[] = ['type' => '', 'date' => ''];
        $this->saveToSession(); // Save to session each time an operation is added
    }

    public function removeOperation($index)
    {
        unset($this->operations[$index]);
        $this->operations = array_values($this->operations); // Reindex the array
        $this->saveToSession(); // Save to session each time an operation is removed
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession(); // Save to session before switching tabs
        $this->dispatch('switch-tab', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }

    public function saveToSession()
    {
        $patient = Session::get('patient_information', []);
        $patient['operations'] = $this->operations;
        Session::put('patient_information', $patient); // Save operations data to session
    }

    public function render()
    {
        return view('livewire.staff.hp-form-section.surgical-history-hp');
    }
}
