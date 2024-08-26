<?php

namespace App\Livewire\Admin\Finance;
use Modules\Finance\App\Services\RequisitionService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use Modules\Finance\App\Models\Requisition as ModelsRequisition;
use Illuminate\Support\Facades\Session;

class Requisition extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Requisition' => '$refresh'];

    public $RequisitionId;

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
    public function approveRequisition($RequisitionId){
        ModelsRequisition::whereId($RequisitionId)->update([
            'request_status' => 'approved',
            'updated_by' =>auth()->user()->id,
        ]);
        Session::flash('msg', 'You Have approve Requisition Succesful');
        $this->dispatch('Requisition', 'refreshComponent');
    }
}
