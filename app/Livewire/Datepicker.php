<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Datepicker extends Component
{
    public string $id;
    public string $value;
    public bool $disabled;

    public function mount(string $id, $value = '2001-02-26', $disabled = false)
    {
        $this->value = Carbon::createFromFormat('Y-m-d', $value)->format('m/d/Y');
        $this->id = $id;
        $this->disabled = $disabled;
    }
    public function render()
    {
        return view('livewire.datepicker');
    }
}
