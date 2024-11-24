<?php

namespace App\Livewire;

use App\Models\PhysicalScreeningModel; 
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class TeachingVitalSigns extends Component
{
    public $temperature;
    public $bloodPressure;
    public $pulseRate;
    public $respirations;
    public $O2Saturation;
    public $bmi;
    public $nutritionalStatus;
    public $height;
    public $weight;
    public $chiefComplaints;

    public $patient_id;

    public function mount()
    {
        $this->patient_id = session('patient_id');
        
        $this->loadExistingData();
    }

    public function loadExistingData()
    {
        if ($this->patient_id) {
            $existingScreening = PhysicalScreeningModel::where('patient_id', $this->patient_id)->first();
            if ($existingScreening) {
                $this->height = $existingScreening->height;
                $this->weight = $existingScreening->weight;
                $this->bloodPressure = $existingScreening->blood_pressure;
                $this->pulseRate = $existingScreening->pulse_rate;
                $this->respirations = $existingScreening->respiration;
                $this->O2Saturation = $existingScreening->spo2;
                $this->bmi = $existingScreening->BMI;
                $this->nutritionalStatus = $existingScreening->BMI_class;
                $this->chiefComplaints = $existingScreening->chief_complaints; 
            }
        }
    }

    public function submitForm()
    {
        Log::info('Vital Signs Submitted:', [
            'patient_id' => $this->patient_id,
            'temperature' => $this->temperature,
            'bloodPressure' => $this->bloodPressure,
            'pulseRate' => $this->pulseRate,
            'respirations' => $this->respirations,
            'O2Saturation' => $this->O2Saturation,
            'bmi' => $this->bmi,
            'nutritionalStatus' => $this->nutritionalStatus,
            'height' => $this->height,
            'weight' => $this->weight,
            'chiefComplaints' => $this->chiefComplaints,
        ]);

        try {
            PhysicalScreeningModel::updateOrCreate(
                ['patient_id' => $this->patient_id],
                [
                    'height' => $this->height,
                    'weight' => $this->weight,
                    'blood_pressure' => $this->bloodPressure,
                    'pulse_rate' => $this->pulseRate,
                    'respiration' => $this->respirations,
                    'spo2' => $this->O2Saturation,
                    'BMI' => $this->bmi,
                    'BMI_class' => $this->nutritionalStatus,
                    'chief_complaints' => $this->chiefComplaints, 
                ]
            );

            session()->flash('message', 'Vital signs data saved successfully!');
            Log::info('Vital signs data saved successfully for patient: ' . $this->patient_id);
        } catch (\Exception $e) {
            Log::error('Error saving vital signs data: ' . $e->getMessage());
            session()->flash('error_message', 'An error occurred while saving the data.');
        }
    }

    public function render()
    {
        return view('livewire.staff.teaching-vitals-section.teaching-vital-signs');
    }
}
