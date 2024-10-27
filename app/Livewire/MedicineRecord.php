<?php

namespace App\Livewire;

use Livewire\Component;

class MedicineRecord extends Component
{
    public $medicineRecords = [];
    public function render()
    {
        return view('livewire.nurse.medicine-records');
    }
}
