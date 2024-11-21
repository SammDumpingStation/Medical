<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log; 
use Livewire\Component;
use App\Models\PersonalRemarksModel;

class PersonalRemarks extends Component
{
    public $patientID;
    public $gender;
    public $diagnosis = ''; 
    public $remarks = '';  

    public function mount()
    {
        $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? 0;
        $this->gender = Session::get('patient_information.personal_information.gender') ?? '';
    }

    public function savePatientInformation()
{
    $patientID = 123; 

     session([
        'patient_information.personal_information.patient_id' => $patientID,
    ]);
}

    public function switchToTab($tabId)
    {
         $this->savePersonalRemarks();
        $this->savePatientInformation();
        $this->dispatch('switch-tab-form2', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }

    public function savePersonalRemarks()
    {
        $this->validate([
            'diagnosis' => 'required|string',
            'remarks' => 'required|string',
        ]);

       $data = [
            'patient_id' => $this->patientID,
            'diagnosis' => $this->diagnosis,
            'remarks' => $this->remarks,
        ];

        Log::info('Saving personal remarks to the database', $data);

        try {
            PersonalRemarksModel::create($data);

            session()->flash('message', 'Personal remarks saved successfully.');

            $this->reset(['diagnosis', 'remarks']);
        } catch (\Exception $e) {
            Log::error('Error saving personal remarks: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.staff.vital-form-section.personal-remarks');
    }
}
