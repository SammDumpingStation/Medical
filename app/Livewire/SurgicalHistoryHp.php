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
    public $operationType;
    public $operationDate;

    // public $type;
    // public $date;
    public $operations = [];
    public function mount()
    {
        $this->patientID = Session::get('patient_information.personal_information.patient_id', 0);
        
       Log::info('Patient ID for MedicalHistory:', ['patient_id' => $this->patientID]);
        
        $this->operations = PastSurgicalHistory::where('patient_id', $this->patientID)
            ->get()
            ->map(function ($operation) {
                // Log the operation being processed
                Log::info('Processing operation:', ['operation_type' => $operation->operation_type, 'operation_time' => $operation->operation_time]);
    
                return [
                    'type' => $operation->operation_type,
                    'date' => $operation->operation_time
                        ? Carbon::parse($operation->operation_time)->format('Y-m-d') // Format the operation time
                        : null, 
                ];
            })
            ->toArray();
        
        Log::info('Retrieved operations:', ['operations' => $this->operations]);
    
       if (empty($this->operations)) {
            $this->operations = [['type' => '', 'date' => '']];
            Log::info('No past surgical history found. Initialized with empty row.');
        } else {
            Log::info('Existing operations found. Added an empty row for new data entry.');
        }
    }
    
    
    

    public function addOperation()
    {
        $this->operations[] = ['type' => '', 'date' => ''];
    }

    public function saveOperation()
    {
        $patientID = $this->patientID;
    
        // Validate the individual operation fields
        $this->validate([
            'operationType' => 'required|string|max:255',
            'operationDate' => 'required|date',
        ]);
    
        // Save the operation to the database
        PastSurgicalHistory::updateOrCreate(
            [
                'patient_id' => $patientID,
                'operation_type' => $this->operationType,
                'operation_time' => Carbon::parse($this->operationDate),
            ],
            [
                'operation_type' => $this->operationType,
                'operation_time' => Carbon::parse($this->operationDate),
            ]
        );
    
        // Flash a success message
        session()->flash('message', 'Operation saved successfully.');
    
        // Reset the form fields
        $this->operationType = '';
        $this->operationDate = '';
        $this->mount();
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
