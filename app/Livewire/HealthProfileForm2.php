<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;


use App\Models\PhysicalScreeningModel;
use App\Models\PhysicalExaminationModel;
use App\Models\AncillaryExaminationsModel;
use App\Models\StudentClassificationModel;
use App\Models\PersonalRemarksModel;


class HealthProfileForm2 extends Component
{

    public $patientID;
    public $physical_screening;
 
    public function mount()
    {
        $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? 0;
    
        Log::info('Patient ID:', ['patient_id' => $this->patientID]);

        $this->physical_screening = PhysicalScreeningModel::where('patient_id', $this->patientID)->first();
        $this->physical_examination = PhysicalExaminationModel::where('patient_id', $this->patientID)->first();
        $this->ancillary_examinations = AncillaryExaminationsModel::where('patient_id', $this->patientID)->first();
        $this->StudentClassificationModel = StudentClassificationModel::where('patient_id', $this->patientID)->first() ?? new PastSurgicalHistory();
        $this->PersonalRemarksModel = PersonalRemarksModel::where('patient_id', $this->patientID)->first();
   
    }


    public function render()
    {
        return view('livewire.staff.printable-forms.health-profile-form2', [
            'physical_screening' => $this->physical_screening,
            'physical_examination' => $this->physical_examination,
            'ancillary_examinations' => $this->ancillary_examinations,
            'StudentClassificationModel' => $this->StudentClassificationModel,
            'PersonalRemarksModel' => $this->PersonalRemarksModel,
         
        ]);
    }
}
