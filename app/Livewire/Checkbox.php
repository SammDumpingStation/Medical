<?php

namespace App\Livewire;

use Livewire\Component;

class Checkbox extends Component
{
    public string $id;
    public string $value;
    public string $title;
    public bool $isChecked = true;

    public function mount(string $id = '', string $value = '')
    {
        $this->id = $id;
        $this->value = $value;
        $this->dispatch('checkbox', [
            'value' => $this->value,
            'checked' => true,
        ]);

    }

    public function updatedIsChecked($value)
    {
        $this->dispatch('checkbox', [
            'value' => $this->value,
            'checked' => $value,
        ]);
    }

    public function render()
    {
        return view('livewire.checkbox');
    }
}
