<?php

namespace App\Livewire;

use App\Models\ConsultationHistory;
use Livewire\Component;
use Livewire\WithPagination;

class ConsultationTable extends Component
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
            'primary diagnosis',
            'status',
            'date',
            'time'];
    }

    public function getStatusColor($status)
    {
        return match ($status) {
            'Completed' => 'bg-green-100 text-green-800 dark:text-green-400 border border-green-100 dark:border-green-500',
            'Pending' => 'bg-yellow-100 text-yellow-800 dark:text-yellow-400 border border-yellow-100 dark:border-yellow-500',
            'Ongoing' => 'bg-blue-100 text-blue-800 dark:text-blue-400 border border-blue-100 dark:border-blue-500',
            'Cancelled' => 'bg-red-100 text-red-800 dark:text-red-400 border border-red-100 dark:border-red-500',
            default => 'bg-gray-100 text-gray-800 dark:text-gray-400 border border-gray-100 dark:border-gray-500'
        };
    }

    public function render()
    {
        $datas = ConsultationHistory::orderBy('date', 'desc')->where('patient_id', 'LIKE', "%{$this->search}%")->paginate(0);
        return view('livewire.staff.consultation-table', ['datas' => $datas]
        );
    }
}
