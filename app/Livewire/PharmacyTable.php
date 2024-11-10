<?php

namespace App\Livewire;

use App\Models\ConsultationHistory;
use Livewire\Component;
use Livewire\WithPagination;

class PharmacyTable extends Component
{
    use WithPagination;

    public $headers = [];
    public $search;

    public function mount()
    {
        $this->headers = [
            'Name',
            'Brand Name',
            'Dosage',
            'Manufactured Date',
            'Expiry',
            'Turn over to supply',
            'Stock on Hand',
            'Dispensed',
            'Status',

        ];
    }

    public function render()
    {
        $datas = ConsultationHistory::where('patient_id', 'LIKE', "%{$this->search}%")->paginate(10);
        return view('livewire.pharmacy-table', ['datas' => $datas]
        );
    }
}
