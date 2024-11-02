<?php

namespace App\Livewire;

use Livewire\Component;

class FormCardHp extends Component
{
    public string $icon;
    public string $title;
    public string $buttonLabel;
    
    public function render()
    {
        return view('livewire.form-card-hp');
    }
}
