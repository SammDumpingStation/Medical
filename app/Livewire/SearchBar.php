<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBar extends Component
{
    public bool $disabled = false;
    public string $button = 'Search';
    public string $value = '';
    public function render()
    {
        return view('livewire.search-bar');
    }
}
