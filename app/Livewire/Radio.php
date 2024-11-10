<?php

namespace App\Livewire;

use Livewire\Component;

class Radio extends Component
{
    public bool $default;
    public string $title;
    public string $id;
    public string $name;
    public string $value;
    public $model;

    public function mount(bool $default = false, string $title = 'Lorem', string $id = '1', string $name = 'Default', string $value = 'Default', $model = '')
    {
        $this->default = $default;
        $this->title = $title;
        $this->id = $id;
        $this->name = $name;
        $this->default = $default;
        $this->model = $model;
    }
    public function render()
    {
        return view('livewire.radio');
    }
}
