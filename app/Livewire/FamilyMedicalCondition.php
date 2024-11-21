<?php
namespace App\Livewire;

use App\Models\ParentCondition;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class FamilyMedicalCondition extends Component
{
    public $motherConditions = [];
    public $fatherConditions = [];
    public $patientID;
    public $newMotherCondition = '';
    public $newFatherCondition = '';

    public function mount() {
        $this->patientID = Session::get('patient_information.personal_information.patient_id', 0);

        $parentCondition = ParentCondition::where('patient_id', $this->patientID)->first();
    
        $this->motherConditions = $parentCondition && $parentCondition->mother_conditions 
            ? (is_array($parentCondition->mother_conditions) ? $parentCondition->mother_conditions : explode(',', $parentCondition->mother_conditions)) 
            : [];
    
        $this->fatherConditions = $parentCondition && $parentCondition->father_conditions 
            ? (is_array($parentCondition->father_conditions) ? $parentCondition->father_conditions : explode(',', $parentCondition->father_conditions)) 
            : [];
    
        Log::info('Family medical conditions loaded:', [
            'patient_id' => $this->patientID,
            'mother_conditions' => $this->motherConditions,
            'father_conditions' => $this->fatherConditions,
        ]);
    }

    public function buttonClick()
    {
        $this->dispatch('family-condition-data', motherCondition: $this->motherConditions, fatherCondition: $this->fatherConditions);
    }

    public function addMotherCondition()
    {
        if ($this->newMotherCondition) {
            $this->motherConditions[] = $this->newMotherCondition;
            $this->newMotherCondition = '';

             $this->saveConditions();

            $this->buttonClick();
        }
    }

    public function addFatherCondition()
    {
        if ($this->newFatherCondition) {
            $this->fatherConditions[] = $this->newFatherCondition;
            $this->newFatherCondition = '';

            $this->saveConditions();

             $this->buttonClick();
        }
    }

    public function saveConditions()
    {
        $motherConditionsString = implode(',', array_filter($this->motherConditions)); 
        $fatherConditionsString = implode(',', array_filter($this->fatherConditions)); 
    
         if ($this->patientID && (count($this->motherConditions) > 0 || count($this->fatherConditions) > 0)) {
            ParentCondition::updateOrCreate(
                ['patient_id' => $this->patientID],
                [
                    'mother_conditions' => $motherConditionsString,
                    'father_conditions' => $fatherConditionsString,
                ]
            );

            Log::info('Parent conditions saved successfully', ['patient_id' => $this->patientID]);
        } else {
            Log::warning('Patient ID or conditions missing, unable to save parent conditions');
        }
    }

    public function render()
    {
        return view('livewire.staff.hp-form-section.family-medical-condition');
    }
}
