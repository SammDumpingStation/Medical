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
        Log::info('Saving admissions started', ['patient_id' => $this->patientID, 'admissions' => $this->admissions]);

        foreach ($this->admissions as $admission) {
            // Validate each admission
            if (empty($admission['diagnosis']) || empty($admission['admission_date'])) {
                Log::warning('Skipping invalid admission', ['admission_data' => $admission]);
                continue;
            }

            // Log each admission data before processing
            Log::info('Processing admission', ['admission_data' => $admission]);

            if (isset($admission['id'])) {
                // If the admission already exists, update it
                Log::info('Updating existing admission', ['admission_id' => $admission['id']]);
                Admission::where('id', $admission['id'])
                    ->where('patient_id', $this->patientID)
                    ->update([
                        'diagnosis' => $admission['diagnosis'],
                        'admission_date' => $admission['admission_date'],
                    ]);
            } else {
                // If the admission is new, create it
                Log::info('Creating new admission', ['diagnosis' => $admission['diagnosis'], 'admission_date' => $admission['admission_date']]);
                Admission::create([
                    'patient_id' => $this->patientID,
                    'diagnosis' => $admission['diagnosis'],
                    'admission_date' => $admission['admission_date'],
                ]);
            }
        }

        // Success message logging
        Log::info('Admissions saved successfully', ['patient_id' => $this->patientID]);

        session()->flash('message', 'Admissions saved successfully!');

        // Clear session data and reset the admissions array
        Session::forget('patient_information.medical_history.admissions');
      

    } catch (\Exception $e) {
        // Log the error details
        Log::error('Error saving admissions to the database', [
            'patient_id' => $this->patientID,
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
        ]);

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
