<?php
namespace App\Livewire;

use App\Models\MedicineInventory;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log;

class PharmacyTable extends Component
{
    use WithPagination;

    public $headers = [];
    public $search;
    
    public $name;
    public $brand_name;
    public $dosage;
    public $manufactured_date;
    public $expiry;
    public $turn_over_to_supply;
    public $stock_on_hand;
    public $dispensed;
    public $status;

    public function mount()
    {
        $this->headers = [
            'Name',
            'Brand Name',
            'Dosage',
            'Manufactured Date',
            'Expiry',
            'Turn Over to Supply',
            'Stock on Hand',
            'Dispensed',
            'Status',
        ];
    }

   public function addMedicine()
{
    try {
        $this->turn_over_to_supply = \Carbon\Carbon::parse($this->turn_over_to_supply)->format('Y-m-d');

        Log::debug('Incoming medicine data: ', [
            'name' => $this->name,
            'brand_name' => $this->brand_name,
            'dosage' => $this->dosage,
            'manufactured_date' => $this->manufactured_date,
            'expiry' => $this->expiry,
            'turn_over_to_supply' => $this->turn_over_to_supply,
            'stock_on_hand' => $this->stock_on_hand,
            'dispensed' => $this->dispensed,
            'status' => $this->status,
        ]);

        // Validate the data
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'brand_name' => 'required|string|max:255',
            'dosage' => 'required|string|max:100',
            'manufactured_date' => 'required|date',
            'expiry' => 'required|date|after:manufactured_date',
            'turn_over_to_supply' => 'required|date', 
            'stock_on_hand' => 'required|integer|min:0',
            'dispensed' => 'required|integer|min:0',
            'status' => 'required|string|max:100',
        ]);

        Log::debug('Validated data: ', $validated);

         MedicineInventory::create($validated);

       Log::info('Medicine added successfully.');

        session()->flash('message', 'Medicine added successfully.');

        $this->resetFormFields();

   
    } catch (\Exception $e) {
        Log::error('Error adding medicine: ' . $e->getMessage());

         session()->flash('error', 'Failed to add medicine.');

        throw $e;
    }
}

    // Helper method to reset form fields
    public function resetFormFields()
    {
        $this->name = '';
        $this->brand_name = '';
        $this->dosage = '';
        $this->manufactured_date = '';
        $this->expiry = '';
        $this->turn_over_to_supply = '';
        $this->stock_on_hand = '';
        $this->dispensed = '';
        $this->status = '';
        $this->render();

    }

    public function render()
    {
        $datas = MedicineInventory::query()
            ->where('name', 'LIKE', "%{$this->search}%")
            ->orWhere('brand_name', 'LIKE', "%{$this->search}%")
            ->orWhere('dosage', 'LIKE', "%{$this->search}%")
            ->orWhere('status', 'LIKE', "%{$this->search}%")
            ->paginate(10);
    
        return view('livewire.pharmacy-table', ['datas' => $datas]);
    }
    
}
