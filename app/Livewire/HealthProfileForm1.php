<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Models\Patient;
use App\Models\PatientDetails;
use App\Models\SocialHistory;
use App\Models\MedicalHistory;
use App\Models\PastSurgicalHistory;
use App\Models\Immunizations;
use App\Models\Admission;
use App\Models\ParentCondition; 

class HealthProfileForm1 extends Component
{
    public $patientID;
    public $personal_information, $emergency_contact, $social_history, $medical_history, $recentAdmissions, $surgical_history, $immunizations, $parent_conditions;

    public function mount()
    {
        $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? 0;
        
        Log::info('Patient ID on FORM 1:', ['patient_id' => $this->patientID]);

         $this->personal_information = Patient::where('patient_id', $this->patientID)->first();
        $this->social_history = SocialHistory::where('patient_id', $this->patientID)->first();
        $this->medical_history = MedicalHistory::where('patient_id', $this->patientID)->first();
             
     
        $this->surgical_history = PastSurgicalHistory::where('patient_id', $this->patientID)->first() ?? new PastSurgicalHistory();
        $this->immunizations = immunizations::where('patient_id', $this->patientID)->first();
        $this->emergency_contact = PatientDetails::where('patient_id', $this->patientID)->first();
        $this->recentAdmissions = Admission::where('patient_id', $this->patientID)->get();
        $this->parent_conditions = ParentCondition::where('patient_id', $this->patientID)->first() ?? new ParentCondition();
    //    //   Log::info('Fetched Medical History data for Patient ID:', ['medical_history' => $this->medical_history]);
    //    Log::info('Fetched immunizations:', ['immunizations' => $this->immunizations]);
    //    Log::info('Fetched recentAdmissions:', ['recentAdmissions' => $this->recentAdmissions]);
    //    Log::info('Fetched health profile data for Patient ID:', ['patient_id' => $this->patientID]);
    }

    public function render()
    {
        return view('livewire.staff.printable-forms.health-profile-form1', [
            'personal_information' => $this->personal_information,
            'social_history' => $this->social_history,
            'medical_history' => $this->medical_history,
            'surgical_history' => $this->surgical_history,
            'immunizations' => $this->immunizations,
            'emergency_contact' => $this->emergency_contact,
            'recentAdmissions' => $this->recentAdmissions,
            'parent_conditions' => $this->parent_conditions,
        ]);
    }
}
