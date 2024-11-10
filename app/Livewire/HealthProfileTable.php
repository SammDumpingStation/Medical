<?php

namespace App\Livewire;

use App\Models\ConsultationHistory;
use Livewire\Component;
use Livewire\WithPagination;

class HealthProfileTable extends Component
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
            'BMI',
            'BMI Status',
            'Options',
        ];
    }

    public function render()
    {
        $datas = ConsultationHistory::where('patient_id', 'LIKE', "%{$this->search}%")->paginate(10);
        return view('livewire.staff.hp-form-section.health-profile-table', ['datas' => $datas]
        );
    }
}
