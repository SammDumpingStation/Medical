<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Datepicker extends Component
{
    public string $id;
    public string $value;
    public bool $disabled;

    public function admissionClick()
    {
        dd($this->value);
        // $this->dispatch('datepicker-admission-data', value: $this->value);
    }

    public function mount(string $id, $value = '', $disabled = false)
    {
        // If no value is provided, set the default value to today’s date
        $this->value = $value ?
        Carbon::createFromFormat('Y-m-d', $value)->format('m/d/Y') :
        Carbon::today()->format('m/d/Y');

        $this->id = $id;
        $this->disabled = $disabled;
    }
    public function render()
    {
        return view('livewire.datepicker');
    }
}
