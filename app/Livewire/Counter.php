<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function incrementBy(int $value)
    {
        if ($value === 2)
            $this->count += $value;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
