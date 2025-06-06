<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use App\Models\ConsultationHistory;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log;

class DoctorCofirmationTable extends Component
{
    use WithPagination;

    public $headers = [];
    public $search;
    public $selectedPatientId;
    public $patient_id = null;
    public $isModalOpen = false;
    public $status = null;

    public function mount()
    {
        
    
        Session::forget('patient_information.personal_information.patient_id');

    // // Log the session flushing action for debugging purposes
    Log::info('All session patient ID cleared upon arrival.');

        $this->headers = [
            'Patient Id',
            'Patient Name',
            'age',
            'gender',
            'year level',
            'department',
            'BMI',
            'BMI Status',
            'Options',
        ];
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
        $this->patient_id = null;
    }

    public function openModal($patientId)
    {
        $this->patient_id = $patientId;
        session()->put('patient_id', $patientId); 
        Log::info('Opening modal for patient ID: ' . $patientId);

               session()->put('patient_information.personal_information.patient_id', $patientId);
    
               Log::info('Patient ID stored in session:', ['patient_id' => $patientId]);
 
               
               
        $this->isModalOpen = true;
    }

    public function confirmProfile()
    {
        $patientId = session('patient_id');
        Log::info('Confirmation for patient ID: ' . $patientId);

        $consultation = ConsultationHistory::where('patient_id', $this->patient_id)->first();

        if ($consultation) {
            $consultation->update(['status' => 'Completed']);
            $this->status = 'Completed';
        } else {
            ConsultationHistory::updateOrCreate(
                ['patient_id' => $this->patient_id],
                [
                    'status' => 'Completed',
                    'date' => now()->toDateString(),
                    'time' => now()->toTimeString(),
                ]
            );
            $this->status = 'Confirmed';
        }

        $this->closeModal();
    }

    public function setPending()
    {
        $consultation = ConsultationHistory::where('patient_id', $this->patient_id)->first();

        if ($consultation) {
            $consultation->update(['status' => 'Pending']);
            $this->status = 'Pending';
        } else {
            ConsultationHistory::create([
                'patient_id' => $this->patient_id,
                'status' => 'Pending',
                'date' => now()->toDateString(),
                'time' => now()->toTimeString(),
            ]);
            $this->status = 'Pending';
        }

        $this->closeModal();
    }
    
    public function setSession($patientId)
    {
  
        session()->put('patient_information.personal_information.patient_id', $patientId);
    
         Log::info('Patient ID stored in session:', ['patient_id' => $patientId]);
    }
    

    public function render()
    {
        $datas = ConsultationHistory::orderBy('date', 'desc')
            ->where('patient_id', 'LIKE', "%{$this->search}%")
            ->paginate(10);

        return view('livewire.doctor-cofirmation-table', ['datas' => $datas]);
    }
}
