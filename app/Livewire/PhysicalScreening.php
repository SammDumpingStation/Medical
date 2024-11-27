<?php

namespace App\Livewire;

use App\Models\PhysicalScreeningModel;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class PhysicalScreening extends Component
{
    public $height, $weight, $blood_pressure, $pulse_rate, $respiration, $spo2, $bmi, $bmi_class;
    public $right_vision, $left_vision, $visual_acuity, $hearing_ad, $hearing_as, $isihara_color_vision, $speech;

    public $patientID;

    #[On('radioSelected')]
    public function radioSelected($name, $value)
    {
        if ($name === 'visual-acuity') {
            $this->visual_acuity = $value;
        } elseif ($name === 'isihara-color-vision') {
            $this->isihara_color_vision = $value;
        } elseif ($name === 'AS') {
            $this->hearing_as = $value;
        } elseif ($name === 'AD') {
            $this->hearing_ad = $value;
        } elseif ($name === 'speech') {
            $this->speech = $value;
        }
    }

    public function mount()
{
    $this->patientID = Session::get('patient_information.personal_information.patient_id', 0);

    Log::info('Patient ID for Physical Screening:', ['patient_id' => $this->patientID]);

     $existingData = PhysicalScreeningModel::where('patient_id', $this->patientID)->first();

    if ($existingData) {
        $this->height = $existingData->height;
        $this->weight = $existingData->weight;
        $this->blood_pressure = $existingData->blood_pressure;
        $this->pulse_rate = $existingData->pulse_rate;
        $this->respiration = $existingData->respiration;
        $this->spo2 = $existingData->spo2;
        $this->bmi = $existingData->BMI;
        $this->bmi_class = $existingData->BMI_class;
        $this->right_vision = $existingData->right_vision;
        $this->left_vision = $existingData->left_vision;
        $this->visual_acuity = $existingData->visual_acuity;
        $this->isihara_color_vision = $existingData->ishihara_color_vision;
        $this->hearing_ad = $existingData->tuning_fork_ad;
        $this->hearing_as = $existingData->tuning_fork_as;
        $this->speech = $existingData->speech;
        Log::info('There is data in the data base ');

    } else {
         $this->height = Session::get('patient_information.physical_screening.height') ?? '';
        $this->weight = Session::get('patient_information.physical_screening.weight') ?? '';
        $this->blood_pressure = Session::get('patient_information.physical_screening.blood_pressure') ?? '';
        $this->pulse_rate = Session::get('patient_information.physical_screening.pulse_rate') ?? '';
        $this->respiration = Session::get('patient_information.physical_screening.respiration') ?? '';
        $this->spo2 = Session::get('patient_information.physical_screening.spo2') ?? '';
        $this->bmi = Session::get('patient_information.physical_screening.bmi') ?? '';
        $this->bmi_class = Session::get('patient_information.physical_screening.bmi_class') ?? '';

        $this->right_vision = Session::get('patient_information.physical_screening.right_vision') ?? '';
        $this->left_vision = Session::get('patient_information.physical_screening.left_vision') ?? '';
        $this->visual_acuity = Session::get('patient_information.physical_screening.visual_acuity') ?? 'Uncorrected';

        $this->hearing_ad = Session::get('patient_information.physical_screening.hearing_ad') ?? 'Inadequate';
        $this->hearing_as = Session::get('patient_information.physical_screening.hearing_as') ?? 'Inadequate';

        $this->isihara_color_vision = Session::get('patient_information.physical_screening.isihara_color_vision') ?? 'Defective';
        $this->speech = Session::get('patient_information.physical_screening.speech') ?? 'Unclear';
        Log::info('There is no data on the database  ');
    }
}
public function updated($propertyName)
{
    if (in_array($propertyName, ['height', 'weight'])) {
        $this->calculateBMI();
    }
}
public function calculateBMI()
{
    Log::info('Calculating BMI.', [
        'height' => $this->height,
        'weight' => $this->weight,
    ]);

    if ($this->height > 0 && $this->weight > 0) {
        $heightInMeters = $this->height / 100; 
        $this->bmi = $this->weight / ($heightInMeters ** 2);

        Log::info('BMI calculated.', [
            'height_in_meters' => $heightInMeters,
            'bmi' => $this->bmi,
        ]);

        if ($this->bmi < 18.5) {
            $this->bmi_class = 'Underweight';
            Log::info('BMI category assigned: Underweight.');
        } elseif ($this->bmi >= 18.5 && $this->bmi <= 24.9) {
            $this->bmi_class = 'Normal weight';
            Log::info('BMI category assigned: Normal weight.');
        } elseif ($this->bmi >= 25 && $this->bmi <= 29.9) {
            $this->bmi_class = 'Overweight';
            Log::info('BMI category assigned: Overweight.');
        } else {
            $this->bmi_class = 'Obesity';
            Log::info('BMI category assigned: Obesity.');
        }
    } else {
        Log::warning('Invalid height or weight provided for BMI calculation.', [
            'height' => $this->height,
            'weight' => $this->weight,
        ]);

        $this->bmi = null;
        $this->bmi_class = null;
    }

    Log::info('BMI calculation complete.', [
        'bmi' => $this->bmi,
        'bmi_class' => $this->bmi_class,
    ]);
}



public function saveToDatabase()
{
    try {
        // Calculate BMI
        if ($this->height > 0 && $this->weight > 0) {
            $heightInMeters = $this->height / 100; 
            $this->bmi = $this->weight / ($heightInMeters ** 2);

            // Determine BMI category
            if ($this->bmi < 18.5) {
                $this->bmi_class = 'Underweight';
            } elseif ($this->bmi >= 18.5 && $this->bmi <= 24.9) {
                $this->bmi_class = 'Normal weight';
            } elseif ($this->bmi >= 25 && $this->bmi <= 29.9) {
                $this->bmi_class = 'Overweight';
            } else {
                $this->bmi_class = 'Obesity';
            }
        } else {
            $this->bmi = null;
            $this->bmi_class = 'Invalid data'; 
        }

        Log::info('Saving Physical Screening Data', [
            'patient_id' => $this->patientID,
            'height' => $this->height,
            'weight' => $this->weight,
            'bmi' => $this->bmi,
            'bmi_class' => $this->bmi_class,
        ]);

       $existingData = PhysicalScreeningModel::where('patient_id', $this->patientID)->first();

        if ($existingData) {
            $existingData->update([
                'height' => $this->height,
                'weight' => $this->weight,
                'blood_pressure' => $this->blood_pressure,
                'pulse_rate' => $this->pulse_rate,
                'respiration' => $this->respiration,
                'spo2' => $this->spo2,
                'BMI' => $this->bmi,
                'BMI_class' => $this->bmi_class,
                'right_vision' => $this->right_vision,
                'left_vision' => $this->left_vision,
                'visual_acuity' => $this->visual_acuity,
                'ishihara_color_vision' => $this->isihara_color_vision,
                'tuning_fork_ad' => $this->hearing_ad,
                'tuning_fork_as' => $this->hearing_as,
                'speech' => $this->speech,
            ]);

            Log::info('Physical Screening Data updated successfully.');
        } else {
            PhysicalScreeningModel::create([
                'patient_id' => $this->patientID,
                'height' => $this->height,
                'weight' => $this->weight,
                'blood_pressure' => $this->blood_pressure,
                'pulse_rate' => $this->pulse_rate,
                'respiration' => $this->respiration,
                'spo2' => $this->spo2,
                'BMI' => $this->bmi,
                'BMI_class' => $this->bmi_class,
                'right_vision' => $this->right_vision,
                'left_vision' => $this->left_vision,
                'visual_acuity' => $this->visual_acuity,
                'ishihara_color_vision' => $this->isihara_color_vision,
                'tuning_fork_ad' => $this->hearing_ad,
                'tuning_fork_as' => $this->hearing_as,
                'speech' => $this->speech,
            ]);

            Log::info('Physical Screening Data saved successfully.');
        }

        $this->saveToSession();

    } catch (\Exception $e) {
        Log::error('Error saving Physical Screening Data', [
            'error_message' => $e->getMessage(),
            'stack_trace' => $e->getTraceAsString()
        ]);

        session()->flash('error', 'There was an error saving the data. Please try again.');
    }
}



    public function saveToSession()
    {
        $patientInfo = Session::get('patient_information', []);
        $patientInfo['physical_screening'] = [
            'height' => $this->height,
            'weight' => $this->weight,
            'blood_pressure' => $this->blood_pressure,
            'pulse_rate' => $this->pulse_rate,
            'respiration' => $this->respiration,
            'spo2' => $this->spo2,
            'bmi' => $this->bmi,
            'bmi_class' => $this->bmi_class,
            'right_vision' => $this->right_vision,
            'left_vision' => $this->left_vision,
            'visual_acuity' => $this->visual_acuity,
            'hearing_ad' => $this->hearing_ad,
            'hearing_as' => $this->hearing_as,
            'isihara_color_vision' => $this->isihara_color_vision,
            'speech' => $this->speech,
        ];
        Session::put('patient_information', $patientInfo);
    }

    public function render()
    {
        return view('livewire.staff.vital-form-section.physical-screening');
    }
}
