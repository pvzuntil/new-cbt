<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $angka = 1;
    public function render()
    {
        return view('livewire.counter');
    }

    public function doEvent()
    {
        $this->angka++;
    }
}
