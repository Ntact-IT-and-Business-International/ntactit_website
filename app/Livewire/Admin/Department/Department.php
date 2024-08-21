<?php

namespace App\Livewire\Admin\Department;
use Modules\Department\App\Services\DepartmentService;


use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Department extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Department' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.department.department',[
            'departments' =>DepartmentService::getDepartment($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
