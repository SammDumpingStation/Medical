<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Models\MedicalHistory;

class TeachingMedicalHistory extends Component
{
    public $under_care;
    public $last_appointment_date;
    public $diabetes;
    public $high_blood_pressure;
    public $coronary_artery_disease;
    public $seizure_disorder;
    public $arthritis;
    public $urinary_tract_infection;
    public $hepatitis;
    public $thyroid_h_imbalance;
    public $allergies;
    public $hiv_aids;
    public $any_infection;
    public $additional_conditions;
    public $other_conditions;

    public function logMedicalHistory()
    {
        Log::info('Medical History Submitted:', [
            'under_care' => $this->under_care,
            'last_appointment_date' => $this->last_appointment_date,
            'diabetes' => $this->diabetes,
            'high_blood_pressure' => $this->high_blood_pressure,
            'coronary_artery_disease' => $this->coronary_artery_disease,
            'seizure_disorder' => $this->seizure_disorder,
            'arthritis' => $this->arthritis,
            'urinary_tract_infection' => $this->urinary_tract_infection,
            'hepatitis' => $this->hepatitis,
            'thyroid_h_imbalance' => $this->thyroid_h_imbalance,
            'allergies' => $this->allergies,
            'hiv_aids' => $this->hiv_aids,
            'any_infection' => $this->any_infection,
            'additional_conditions' => $this->additional_conditions,
            'other_conditions' => $this->other_conditions,
        ]);
        $this->submitForm();
    }

    public function submitForm()
    {
        $patient_id = session('patient_id');
    
        if (!$patient_id) {
            session()->flash('error', 'Patient ID is missing.');
            return;
        }
    
     $data = [
            'under_care' => $this->under_care,
            'last_appointment_date' => $this->last_appointment_date,
            'diabetes' => $this->diabetes,
            'high_blood_pressure' => $this->high_blood_pressure,
            'coronary_artery_disease' => $this->coronary_artery_disease,
            'seizure_disorder' => $this->seizure_disorder,
            'arthritis' => $this->arthritis,
            'urinary_tract_infection' => $this->urinary_tract_infection,
            'hepatitis' => $this->hepatitis,
            'thyroid_h_imbalance' => $this->thyroid_h_imbalance,
            'allergies' => $this->allergies,
            'hiv_aids' => $this->hiv_aids,
            'any_infection' => $this->any_infection,
            'additional_conditions' => $this->additional_conditions,
            'other_conditions' => $this->other_conditions,
        ];
    
        Log::info('Medical History Data Submission:', [
            'patient_id' => $patient_id,
            'data' => $data,
        ]);
    
        $medicalHistory = MedicalHistory::where('patient_id', $patient_id)->first();
    
        if ($medicalHistory) {
            $medicalHistory->update($data);
    
            Log::info('Medical History record updated successfully:', [
                'patient_id' => $patient_id,
                'record_id' => $medicalHistory->id,
            ]);
        } else {
            $medicalHistory = MedicalHistory::create(array_merge(['patient_id' => $patient_id], $data));
    
            Log::info('Medical History record created successfully:', [
                'patient_id' => $patient_id,
                'record_id' => $medicalHistory->id,
            ]);
        }
    
        session()->flash('success', 'Medical History saved/updated successfully!');
    }
    

    public function render()
    {
        return view('livewire.staff.teaching-vitals-section.teaching-medical-history');
    }
}
