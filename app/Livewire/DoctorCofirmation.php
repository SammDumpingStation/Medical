<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\ConsultationHistory;
use Illuminate\Support\Facades\Log;

class DoctorCofirmation extends Component
{
    public $patient_id;
    public $status;

    public function mount(){
      
        // Session::forget('patient_information.personal_information.patient_id');

        // // // Log the session flushing action for debugging purposes
        // Log::info('All session patient ID cleared upon arrival.');
    
    }

    public function confirmProfile()
    {
        $consultation = ConsultationHistory::where('patient_id', $this->patient_id)->first();

        if ($consultation) {
             $consultation->update([
                'status' => 'Confirmed',
            ]);

            // Log the update
            Log::info('Health profile confirmed for patient.', [
                'patient_id' => $this->patient_id,
                'status' => 'Confirmed',
                'updated_at' => now()->toDateTimeString(),
            ]);

            $this->status = 'Confirmed';
        } else {
            ConsultationHistory::create([
                'patient_id' => $this->patient_id,
                'status' => 'Confirmed',
                'date' => now()->toDateString(),
                'time' => now()->toTimeString(),
            ]);

            Log::info('New health profile created and confirmed for patient.', [
                'patient_id' => $this->patient_id,
                'status' => 'Confirmed',
                'created_at' => now()->toDateTimeString(),
            ]);

            $this->status = 'Confirmed';
        }
    }

    public function setPending()
    {
        $consultation = ConsultationHistory::where('patient_id', $this->patient_id)->first();

        if ($consultation) {
            $consultation->update([
                'status' => 'Pending',
            ]);

            Log::info('Health profile set to pending for patient.', [
                'patient_id' => $this->patient_id,
                'status' => 'Pending',
                'updated_at' => now()->toDateTimeString(),
            ]);

            $this->status = 'Pending';
        } else {
            ConsultationHistory::create([
                'patient_id' => $this->patient_id,
                'status' => 'Pending',
                'date' => now()->toDateString(),
                'time' => now()->toTimeString(),
            ]);

           Log::info('New health profile created and set to pending for patient.', [
                'patient_id' => $this->patient_id,
                'status' => 'Pending',
                'created_at' => now()->toDateTimeString(),
            ]);

            $this->status = 'Pending';
        }
    }

    public function render()
    {
        return view('livewire.doctor-confirmation', [
            'status' => $this->status,
        ]);
    }
}
