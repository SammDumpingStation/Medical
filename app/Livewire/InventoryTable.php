<?php

namespace App\Livewire;

use App\Models\ConsultationHistory;
use Livewire\Component;
use Livewire\WithPagination;

class InventoryTable extends Component
{
    use WithPagination;

    public $headers = [];
    public $search;

    public function mount()
    {
        $this->headers = [
            'Name',
            'Acquired at',
            'No. of pieces',
            'Status',
            'Turn over to supply',
            'Damaged?',
        ];
    }

    public function render()
    {
        $datas = ConsultationHistory::where('patient_id', 'LIKE', "%{$this->search}%")->paginate(10);
        return view('livewire.inventory-table', ['datas' => $datas]
        );
    }
}
