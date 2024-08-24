<?php

namespace App\Livewire\Admin\Client;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Modules\BusinessDevelopment\App\Services\ClientService;

class Quotation extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Quotation' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.client.quotation',[
            'clients'=>ClientService::getQuotationClients($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
