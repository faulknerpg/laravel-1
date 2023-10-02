<?php

namespace App\Http\Livewire;

use App\Http\Livewire\BaseComponent;

class Pricing extends BaseComponent
{
    public function mount()
    {
        $this->cta_top = true;
        $this->cta_bottom = true;
    }

    public function render()
    {
        return view('livewire.pricing');
    }
}
