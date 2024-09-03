<?php

namespace App\Livewire\Admin\Client;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use Modules\BusinessDevelopment\App\Services\ForwardedQuotationService;

class ForwardedQuotation extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Invoice' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.client.forwarded-quotation',[
            'quotations' =>ForwardedQuotationService::getForwardedQuotation($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
