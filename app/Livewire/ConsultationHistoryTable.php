<?php

namespace App\Livewire;

use App\Models\ConsultationHistory;
use Livewire\Component;
use Livewire\WithPagination;

class ConsultationHistoryTable extends Component
{
    use WithPagination;

    public $headers = [];
    public $search;

    public function mount()
    {
        $this->headers = ['Patient Id',
            'Patient Name',
            'age',
            'gender',
            'year level',
            'department',
        ];
    }

    public function render()
    {
        $datas = ConsultationHistory::orderBy('date', 'desc')->where('patient_id', 'LIKE', "%{$this->search}%")->paginate(10);
        return view('livewire.staff.consultation-history-table', ['datas' => $datas]);
    }
}
