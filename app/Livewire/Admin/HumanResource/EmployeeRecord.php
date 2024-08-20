<?php

namespace App\Livewire\Admin\HumanResource;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class EmployeeRecord extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['EmployeeRecord' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.human-resource.employee-record');
    }
}
