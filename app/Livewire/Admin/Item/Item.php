<?php

namespace App\Livewire\Admin\Item;
use Modules\Item\App\Services\ItemService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Item extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Item' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.item.item',[
            'items'=>ItemService::getItem($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
