<?php

namespace App\Livewire;

use Livewire\Component;

class SmallCard extends Component
{
    public string $title;
    public string $subtitle;
    public string $id;
    public string $footer;

    public function mount(string $title, string $subtitle, string $footer)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->footer = $footer;
    }
    public function render()
    {
        return view('livewire.small-card');
    }
}
