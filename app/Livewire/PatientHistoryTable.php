<?php

namespace App\Livewire;

use App\Models\ConsultationHistory;
use App\Models\PatientHistory;
use Livewire\Component;
use Livewire\WithPagination;

class PatientHistoryTable extends Component
{
    use WithPagination;

    public $headers = [];
    public $search;

    public function mount()
    {
        $this->headers = ['Date of Visit',
            'Time of Visit',
            'Reason',
            'Symptoms',
            'Treatment',
            'Prescribed Medications',
            'Outcome of Visit',
        ];
    }

    public function render()
    {
        $datas = PatientHistory::paginate(10);
        return view('livewire.patient.patient-history-table', ['datas' => $datas]);
    }
}
