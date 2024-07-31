<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Cart extends Component
{
    protected $listeners = ['Cart'];

    
    public function render()
    {
        return view('livewire.front.cart');
    }
}
