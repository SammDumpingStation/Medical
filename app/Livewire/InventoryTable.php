<?php

namespace App\Livewire;

use App\Models\Inventory;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class InventoryTable extends Component
{
    use WithPagination;

    public $headers = [];
    public $search;
    public $inventoryData = [];

    public $name;
    public $acquired_at;
    public $pieces;
    public $status;
    public $turn_over_to_supply;
    public $damaged;

    public $showModal = false;

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

        $this->inventoryData = Inventory::all();
    }

    public function openModal()
    {
        $this->resetFields();
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function resetFields()
    {
        $this->name = '';
        $this->acquired_at = '';
        $this->pieces = '';
        $this->status = '';
        $this->turn_over_to_supply = null; 
        $this->damaged = false;
    }

    
    public function addItem()
{
  
    Log::info('Current properties in Livewire component', [
        'name' => $this->name,
        'acquired_at' => $this->acquired_at,
        'pieces' => $this->pieces,
        'status' => $this->status,
        'turn_over_to_supply' => $this->turn_over_to_supply,
        'damaged' => $this->damaged,
    ]);


    $acquiredAtDate = Carbon::parse($this->acquired_at)->format('Y-m-d');  
    $turnOverToSupplyDate = Carbon::parse($this->turn_over_to_supply)->format('Y-m-d');

    try {
        Inventory::create([
            'name' => $this->name,
            'acquired_at' => $acquiredAtDate,
            'no_of_pieces' => $this->pieces,
            'status' => $this->status,
            'turn_over_to_supply' => $turnOverToSupplyDate,
            'damaged' => $this->damaged,
        ]);

        Log::info('New inventory item created successfully', [
            'name' => $this->name,
            'acquired_at' => $acquiredAtDate, 
            'pieces' => $this->pieces,
            'status' => $this->status,
            'turn_over_to_supply' => $turnOverToSupplyDate,
            'damaged' => $this->damaged,
        ]);

        $this->inventoryData = Inventory::all();
        $this->closeModal();

    } catch (\Exception $e) {
         Log::error('Error creating inventory item', [
            'error' => $e->getMessage(),
            'stack' => $e->getTraceAsString(),
        ]);
    }
}

    public function render()
    {
        $datas = Inventory::where('name', 'LIKE', "%{$this->search}%")->paginate(10);

        return view('livewire.inventory-table', [
            'datas' => $datas,
            'inventoryData' => $this->inventoryData,
        ]);
    }
}
