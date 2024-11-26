<?php
namespace App\Livewire;

use App\Models\dispenseMedicineRecords;
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
            'Patient ID',
            'Medicine Name', 
            'Quantity Dispensed',
            'Amount Given',
            'Medicine Type',
            'Given Date',
            'Expiration Date',
        ];
    }

    public function render()
    {
        $datas = dispenseMedicineRecords::with('medicine') 
            ->whereHas('medicine', function($query) {
                $query->where('name', 'LIKE', "%{$this->search}%");
            })
            ->orWhere('patient_id', 'LIKE', "%{$this->search}%")
            ->paginate(10); 

        return view('livewire.inventory-table', [
            'datas' => $datas,
        ]);
    }
}
