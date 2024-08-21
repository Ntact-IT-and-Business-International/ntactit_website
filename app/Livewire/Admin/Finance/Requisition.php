<?php

namespace App\Livewire\Admin\Finance;
use Modules\Finance\App\Services\RequisitionService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Requisition extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Requisition' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.finance.requisition',[
            'requisitions' =>RequisitionService::getRequisition($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
