<?php
namespace App\Livewire;

use App\Models\ParentCondition;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class FamilyMedicalCondition extends Component
{
    public $motherConditions = [''];
    public $fatherConditions = [''];
    public $patientID;

    public function mount() {
        // Retrieve the patient ID from the session
        $this->patientID = Session::get('patient_information.patient_id');
        
        // Log the patient ID to ensure it's being passed correctly
        Log::info('Family medical contID:', ['patient_id' => $this->patientID]);

        // Set initial values from session or default to empty array
        $this->motherConditions = Session::get('patient_information.medical_history.motherConditions') ?? [''];
        $this->fatherConditions = Session::get('patient_information.medical_history.fatherConditions') ?? [''];
     }

    // Dispatch event to notify the parent component with the updated conditions
    public function buttonClick()
    {
        $this->dispatch('family-condition-data', motherCondition: $this->motherConditions, fatherCondition: $this->fatherConditions);



    }

    // Add a new empty condition for mother
    public function addMotherCondition()
    {
        $this->motherConditions[] = ''; 
        $this->buttonClick();
        $this->saveConditions(); 
    }

    // Add a new empty condition for father
    public function addFatherCondition()
    {
        $this->fatherConditions[] = ''; 
        $this->buttonClick();
        $this->saveConditions(); 
    }

    // Update the mother condition at a given index
    public function updatedMotherConditions($value, $index)
    {
        $this->motherConditions[$index] = $value;
        $this->saveConditions();
    }

    // Update the father condition at a given index
    public function updatedFatherConditions($value, $index)
    {
        $this->fatherConditions[$index] = $value;
        $this->saveConditions();
    }

    // Save the conditions to the database
    public function saveConditions()
    {
        // Ensure the patient ID is set and conditions are not empty
        if ($this->patientID && (count($this->motherConditions) > 0 || count($this->fatherConditions) > 0)) {
            // Create or update the parent conditions for the patient
            ParentCondition::updateOrCreate(
                ['patient_id' => $this->patientID],
                [
                    'mother_conditions' => json_encode($this->motherConditions),
                    'father_conditions' => json_encode($this->fatherConditions),
                ]
            );

            // Log success
            Log::info('Parent conditions saved successfully', ['patient_id' => $this->patientID]);
        } else {
            Log::warning('Patient ID or conditions missing, unable to save parent conditions');
        }
    }

    // Render the Livewire component
    public function render()
    {
        return view('livewire.staff.hp-form-section.family-medical-condition');
    }
}
