<?php

namespace App\Livewire\Admin\HumanResource;
use Modules\HumanResource\App\Services\HrFormService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class HrForm extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['HrForm' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.human-resource.hr-form',[
            'forms' =>HrFormService::getHrForm($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
