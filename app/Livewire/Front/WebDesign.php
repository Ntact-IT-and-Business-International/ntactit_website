<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Modules\ServicesModule\Services\PackageService;
use Modules\ServicesModule\App\Models\Package;

class WebDesign extends Component
{
    public $search = null;
    public $sortBy = null;
    public $sortDirection = null;
    public $perPage = null;
    public $packages;
    
    public function mount()
    {
        $this->packages = Package::all();
    }

    public function addToCart($packageId)
    {
        $package = Package::find($packageId);

        if (!$package) {
            return;
        }

        $cart = Session::get('cart', []);
        $cart[] = $package;
        Session::put('cart', $cart);

        session()->flash('msg', 'Package added to cart successfully!');
    }

    public function render()
    {
        return view('livewire.front.web-design',[
            'packages'=>PackageService::getPackage($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
