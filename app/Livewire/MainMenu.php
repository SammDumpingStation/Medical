<?php

namespace App\Livewire;

use Livewire\Component;

class MainMenu extends Component
{
    public $title;
    public $icon;
    public $href;

    public function render()
    {
        return view('livewire.shared.main-menu');
    }}
