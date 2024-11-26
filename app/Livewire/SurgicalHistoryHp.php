<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\PastSurgicalHistory;
use Illuminate\Support\Facades\Log;

class SurgicalHistoryHp extends Component
{
    public $patientID;
    public $operations = [];
    public $type;
    public $date;

    public function mount()
    {
        $this->patientID = Session::get('patient_information.personal_information.patient_id', 0);
        Log::info('Patient ID for MedicalHistory:', ['patient_id' => $this->patientID]);

         $this->operations = PastSurgicalHistory::where('patient_id', $this->patientID)
            ->get()
            ->map(function ($operation) {
                return [
                    'type' => $operation->operation_type,
                    'date' => Carbon::parse($operation->operation_time)->format('Y-m-d'),
                ];
            })
            ->toArray();

        if (empty($this->operations)) {
            $this->operations = [['type' => '', 'date' => '']];
        }
    }

    public function addOperation()
    {
        $this->operations[] = ['type' => '', 'date' => ''];
    }

    public function saveOperations()
    {
        $patientID = $this->patientID;

        $this->validate([
            'operations.*.type' => 'required|string|max:255',
            'operations.*.date' => 'required|date',
        ]);

         foreach ($this->operations as $operation) {
            PastSurgicalHistory::create([
                'patient_id' => $patientID,
                'operation_type' => $operation['type'],
                'operation_time' => Carbon::parse($operation['date']),
            ]);
        }

        $this->saveToSession();

        // $this->operations = [['type' => '', 'date' => '']];
        session()->flash('message', 'Operations saved successfully.');
    }

    public function removeOperation($index)
    {
        unset($this->operations[$index]);
        $this->operations = array_values($this->operations); 
        $this->saveToSession(); 
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession(); 
        $this->dispatch('switch-tab', ['tabId' => $tabId]); 
    }

    public function saveToSession()
    {
        $patient = Session::get('patient_information', []);
        $patient['operations'] = $this->operations;
        Session::put('patient_information', $patient); 
    }

    public function render()
    {
        return view('livewire.staff.hp-form-section.surgical-history-hp');
    }
}
