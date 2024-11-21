<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Models\Admission;

class RecentAdmissions extends Component
{
    public $admissions = [];
    public $patientID;

    public function mount()
    {
        $this->patientID = Session::get('patient_information.personal_information.patient_id', 0);
        Log::info('Patient ID for MedicalHistory:', ['patient_id' => $this->patientID]);

        $this->admissions = Admission::where('patient_id', $this->patientID)
            ->orderBy('admission_date', 'desc') 
            ->get(['diagnosis', 'admission_date'])
            ->toArray();

         Log::info("Existing Admissions: ", $this->admissions);

        if (empty($this->admissions)) {
            $this->admissions = [['diagnosis' => '', 'admission_date' => '']];
        }
    }

    public function updatedAdmissions($value, $key)
    {
    if (strpos($key, '.') !== false) {
        list($index, $field) = explode('.', $key);

        if (!isset($this->admissions[$index])) {
            $this->admissions[$index] = ['diagnosis' => '', 'admission_date' => ''];
        }

        $this->admissions[$index][$field] = $value;
    } else {
        Log::error("Invalid key format: $key");
    }

    $this->saveToSession();
}


    public function addAdmission()
    {
       $this->admissions[] = ['diagnosis' => '', 'admission_date' => ''];

         $this->saveToSession();
    }

    public function saveAdmission()
    {
        try {
            foreach ($this->admissions as $admission) {
                if (isset($admission['id'])) {
                    Admission::where('id', $admission['id'])
                        ->where('patient_id', $this->patientID)
                        ->update([
                            'diagnosis' => $admission['diagnosis'],
                            'admission_date' => $admission['admission_date'],
                        ]);
                } else {
                    Admission::create([
                        'patient_id' => $this->patientID,
                        'diagnosis' => $admission['diagnosis'],
                        'admission_date' => $admission['admission_date'],
                    ]);
                }
            }

            session()->flash('message', 'Admissions saved successfully!');

            Session::forget('patient_information.medical_history.admissions');
            $this->admissions = [['diagnosis' => '', 'admission_date' => '']];

        } catch (\Exception $e) {
            Log::error('Error saving admissions to the database', ['error' => $e->getMessage()]);
            session()->flash('error', 'An error occurred while saving admissions. Please try again.');
        }
    }

    protected function saveToSession()
    {
         Session::put('patient_information.medical_history.admissions', $this->admissions);
        $this->dispatch('recent-admission-data', admissions: $this->admissions);
    }

    public function render()
    {
        return view('livewire.staff.hp-form-section.recent-admissions');
    }
}
