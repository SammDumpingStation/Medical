<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Models\PersonalRemarksModel;
use App\Models\ConsultationHistory;


class TeachingDiagnosis extends Component
{
    public $patientID;
    public $gender;
    public $diagnoses = []; // To store diagnosis inputs for multiple rows
    public $remarks = []; // To store remarks inputs for multiple rows

    public function mount()
    {
        $this->patientID = session('patient_id');
        $this->gender = Session::get('patient_information.personal_information.gender') ?? '';

        // Initialize 10 rows for input
        for ($i = 0; $i < 1; $i++) {
            $this->diagnoses[$i] = '';
            $this->remarks[$i] = '';
        }
    }

    public function saveRow($index)
    {
        $this->validate([
            "diagnoses.$index" => 'required|string',
            "remarks.$index" => 'required|string',
        ]);
    
        // Save to PersonalRemarksModel
        $personalRemarkData = [
            'patient_id' => $this->patientID,
            'diagnosis' => $this->diagnoses[$index],
            'remarks' => $this->remarks[$index],
        ];
    
        Log::info("Saving row {$index} to the PersonalRemarksModel database", $personalRemarkData);
    
        try {
            PersonalRemarksModel::create($personalRemarkData);
    
            // Save or update ConsultationHistory
            $consultationHistoryData = [
                'primary_diagnosis' => $this->diagnoses[$index],
                'status' => 'Ongoing', // Example status
                'date' => now()->toDateString(),
                'time' => now()->toTimeString(),
            ];
    
            ConsultationHistory::updateOrCreate(
                ['patient_id' => $this->patientID], // Match condition
                $consultationHistoryData // Values to insert or update
            );
    
            session()->flash('message', "Row {$index} saved successfully.");
    
            // Reset the input fields for the saved row
            $this->diagnoses[$index] = '';
            $this->remarks[$index] = '';
        } catch (\Exception $e) {
            Log::error("Error saving row {$index}: " . $e->getMessage());
            session()->flash('error', "Failed to save row {$index}. Please try again.");
        }
    }
    
    public function render()
    {
        return view('livewire.staff.teaching-vitals-section.teaching-diagnosis');
    }
}
