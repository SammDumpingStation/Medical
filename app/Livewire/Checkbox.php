<?php

namespace App\Livewire;

use Livewire\Component;

class Checkbox extends Component
{
    public bool $default;
    public string $title;
    public string $id;
    public string $name;
    public string $value;

    public function mount(bool $default = false, string $title = '', string $id = '1', string $name = 'Default', string $value = 'Default')
    {
        $this->default = $default;
        $this->title = $title;
        $this->id = $id;
        $this->name = $name;
        $this->default = $default;
    }
    public function render()
    {
        return view('livewire.checkbox');
    }
}
