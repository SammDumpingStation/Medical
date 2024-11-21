<?php

namespace App\Livewire;

use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class Radio extends Component
{
    public ?bool $default = null;


    public string $title;
    public string $id;
    public string $name;
    public string $value;

    public function radioSelect()
    {
        $this->dispatch('radioSelected', $this->name, $this->value);
    }

    public function mount(string $title = 'Lorem', string $id = '1', string $name = 'Default', string $value = 'Default', $default = '')
    {
        $this->title = $title;
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->default = $default === $value;
    }
    public function render()
    {
        return view('livewire.radio');
    }
}
