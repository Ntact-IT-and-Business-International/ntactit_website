<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Modules\ServicesModule\Services\PackageService;
use Modules\ServicesModule\App\Models\Package;
use Carbon\Carbon;

class WebDesign extends Component
{
    public $search = null;
    public $sortBy = null;
    public $sortDirection = null;
    public $perPage = null;
    public $packages;
    public $totalAmount = 0;
    public $quantity = 0;

    protected $listeners = ['addToCart'];
    
    public function mount()
    {
        $this->packages = Package::all();
        $this->updateCart();
    }

    public function addToCart($packageId)
    {
        addToCart($packageId);  // Call helper function directly
        $this->updateCart();
        $this->dispatch('Cart', 'refreshComponent');
        session()->flash('msg', 'Package added to cart successfully!');
    }

    public function clearCart()
    {
        clearCart();  // Call helper function directly
        $this->updateCart();
        $this->dispatch('Cart', 'refreshComponent');
        session()->flash('msg', 'Cart cleared successfully!');
    }

    private function updateCart()
    {
        $this->totalAmount = getTotalAmount();  // Call helper function directly
        $this->quantity = getQuantity();        // Call helper function directly
    }

    public function render()
    {

        return view('livewire.front.web-design',[
            'packages'=>PackageService::getPackage($this->search, $this->sortBy, $this->sortDirection, $this->perPage),
        ]);
    }
}
