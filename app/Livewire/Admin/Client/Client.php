<?php

namespace App\Livewire\Admin\Client;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Modules\BusinessDevelopment\App\Services\ClientService;


class Client extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Client' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.client.client',[
            'clients' =>ClientService::getClient($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
