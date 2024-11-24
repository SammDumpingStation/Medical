<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Models\MedicalHistory;

class TeachingPresentMedications extends Component
{
     public $presentMedications = [
        'antibiotics' => false,
        'birthControlPill' => false,
        'aspirin' => false,
        'antiConvulsant' => false,
        'others' => '',
    ];

    public $pregnant = null;
    public $lmpDate = null;
    public $proceduresOperations = null;
    public $recordDate = null;

    public $patient_id;

     public function mount()
    {
        $this->patient_id = session('patient_id');

         if ($this->patient_id) {
            $existingRecord = MedicalHistory::where('patient_id', $this->patient_id)->first();

            if ($existingRecord) {
                 $this->presentMedications['antibiotics'] = $existingRecord->antibiotics;
                $this->presentMedications['birthControlPill'] = $existingRecord->birth_control_pill;
                $this->presentMedications['aspirin'] = $existingRecord->aspirin;
                $this->presentMedications['antiConvulsant'] = $existingRecord->anti_convulsant;
                $this->presentMedications['others'] = $existingRecord->others;
                $this->pregnant = $existingRecord->pregnant;
                $this->lmpDate = $existingRecord->lmp_date;
                $this->proceduresOperations = $existingRecord->procedures_operations;
                $this->recordDate = $existingRecord->record_date;
            }
        }
    }

    protected $rules = [
        'presentMedications.others' => 'nullable|string|max:255',
        'pregnant' => 'required|string|in:yes,no,n/a',
        'lmpDate' => 'nullable|date',
        'proceduresOperations' => 'nullable|string|max:1000',
        'recordDate' => 'required|date',
    ];

    public function submit()
    {
        $this->validate();

        if (!$this->patient_id) {
            session()->flash('error', 'Patient ID is missing.');
            return;
        }
  $data = [
            'patient_id' => $this->patient_id,
            'antibiotics' => $this->presentMedications['antibiotics'],
            'birth_control_pill' => $this->presentMedications['birthControlPill'],
            'aspirin' => $this->presentMedications['aspirin'],
            'anti_convulsant' => $this->presentMedications['antiConvulsant'],
            'others' => $this->presentMedications['others'],
            'pregnant' => $this->pregnant,
            'lmp_date' => $this->lmpDate,
            'procedures_operations' => $this->proceduresOperations,
            'record_date' => $this->recordDate,
        ];

        Log::info('Present Medications Data Submitted', $data);

        $existingRecord = MedicalHistory::where('patient_id', $this->patient_id)->first();

        if ($existingRecord) {
            $existingRecord->update($data);
            session()->flash('message', 'Medical history has been successfully updated.');
        } else {
            MedicalHistory::create($data);
            session()->flash('message', 'Medical history has been successfully saved.');
        }
    }

    public function render()
    {
        return view('livewire.staff.teaching-vitals-section.teaching-present-medications');
    }
}
