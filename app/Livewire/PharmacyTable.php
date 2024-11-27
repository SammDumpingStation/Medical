<?php
namespace App\Livewire;

use App\Models\MedicineInventory;
use App\Models\dispenseMedicineRecords;
use App\Models\Patient;

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

    public $patient_id;
    public $medicine_id;
    public $quantity_dispensed;
    public $amount_given;
    public $given_date;
    public $medicine_type;


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

public function dispenseMedicine()
{
    try {
        $this->validate([
            'patient_id' => 'required|exists:patients,patient_id',
            'medicine_id' => 'required|exists:medicine_inventories,medicine_id',
            'quantity_dispensed' => 'required|integer|min:1',
            'amount_given' => 'required|numeric|min:0',
            'given_date' => 'required|date',
            'medicine_type' => 'required|string',
        ]);

        Log::debug('Dispensing medicine data: ', [
            'patient_id' => $this->patient_id,
            'medicine_id' => $this->medicine_id,
            'quantity_dispensed' => $this->quantity_dispensed,
            'amount_given' => $this->amount_given,
            'given_date' => $this->given_date,
            'medicine_type' => $this->medicine_type,
        ]);

        // Retrieve the medicine inventory
        $medicine = MedicineInventory::where('medicine_id', $this->medicine_id)->first();
        if (!$medicine) {
            session()->flash('error', 'Medicine not found.');
            return;
        }

        // Check if there is sufficient stock on hand
        if ($medicine->stock_on_hand < $this->quantity_dispensed) {
            session()->flash('error', 'Insufficient stock on hand.');
            return;
        }

        // Update stock_on_hand and dispensed columns
        $medicine->stock_on_hand -= $this->quantity_dispensed;
        $medicine->dispensed += $this->quantity_dispensed;
        $medicine->save();

        // Record the dispensing action
        dispenseMedicineRecords::create([
            'patient_id' => $this->patient_id,
            'medicine_id' => $this->medicine_id,
            'quantity_dispensed' => $this->quantity_dispensed,
            'amount_given' => $this->amount_given,
            'given_date' => $this->given_date,
            'medicine_type' => $this->medicine_type,
            'expiration_date' => $medicine->expiry,
        ]);

        Log::info('Medicine dispensed successfully.');

        session()->flash('message', 'Medicine dispensed successfully.');
        $this->resetFormFields();

    } catch (\Exception $e) {
        Log::error('Error dispensing medicine: ' . $e->getMessage());
        session()->flash('error', 'Failed to dispense medicine.');
        throw $e;
    }
}




    public function loadMedicineData($medicineId)
    {
        $medicine = MedicineInventory::find($medicineId);

        if ($medicine) {
            $this->medicine_id = $medicine->name;
            $this->brand_name = $medicine->brand_name;
            $this->dosage = $medicine->dosage;
            $this->manufactured_date = $medicine->manufactured_date;
            $this->expiry = $medicine->expiry;
            $this->turn_over_to_supply = $medicine->turn_over_to_supply;
            $this->stock_on_hand = $medicine->stock_on_hand;
            $this->dispensed = $medicine->dispensed;
            $this->status = $medicine->status;
        } else {
            session()->flash('error', 'Invalid Medicine ID.');
        }
    }

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
