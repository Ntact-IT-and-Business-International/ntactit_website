<?php

namespace App\Livewire\Admin;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\ServicesModule\Services\PackageService;

class Services extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Services' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.services',[
            'packages'=>PackageService::getPackage($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
