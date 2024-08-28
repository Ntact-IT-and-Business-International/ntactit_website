<?php

namespace App\Livewire\Admin\Client;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use Modules\ServicesModule\App\Models\QuotationRequest;
use Modules\ServicesModule\App\Models\Service;
use Illuminate\Support\Facades\Session;

class RequestedQuotation extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['RequestedQuotation' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.client.requested-quotation',[
            'requests' =>Service::getQuotation($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
    public function changeStatus($RequestId){
        QuotationRequest::whereId($RequestId)->update([
            'status' => 'sent',
            'approved_by' =>auth()->user()->id,
        ]);
        Session::flash('msg', 'Quotation Status Update Succesfully');
        $this->dispatch('RequestedQuotation', 'refreshComponent');
    }
}
