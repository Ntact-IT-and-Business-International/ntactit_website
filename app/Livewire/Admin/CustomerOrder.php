<?php

namespace App\Livewire\Admin;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Cart\Services\CustomerOrderService;

class CustomerOrder extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['CustomerOrder' => '$refresh'];

    //over ridding sort by from the trait
    public $search = ''; // Add the search property
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.customer-order',[
            'orders'=>CustomerOrderService::getCustomerOrder($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
