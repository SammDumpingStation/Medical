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
        $this->patientID = Session::get('patient_information.personal_information.patient_id') ?? '';
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
    }

    
public function saveToDatabase()
{
    try {
        // Log the incoming data before saving
        Log::info('Saving Physical Screening Data', [
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

        // Save data to the database
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

        // Log success message
        Log::info('Physical Screening Data saved successfully.');

        // Optionally save data to the session
        $this->saveToSession();

        // Log before redirecting to the next tab
        Log::info('Redirecting to the next tab.', ['next_tab' => 'physical-examination']);

        // Redirect to the next tab
        $this->dispatch('switch-tab-form2', ['tabId' => 'physical-examination']);
    } catch (\Exception $e) {
        // Log any errors that occur
        Log::error('Error saving Physical Screening Data', [
            'error_message' => $e->getMessage(),
            'stack_trace' => $e->getTraceAsString()
        ]);

        // Optionally, you can display an error message to the user
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
