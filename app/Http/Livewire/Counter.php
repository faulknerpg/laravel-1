<?php

namespace App\Http\Livewire;

use App\Http\Livewire\BaseComponent;

class Counter extends BaseComponent
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}

