<?php

namespace App\Livewire\Admin\AccountSetting;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use Modules\HumanResource\App\Services\EmployeeRecordService;

class StaffPermissions extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['StaffForPermissions' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.account-setting.staff-permissions',[
            'users' =>EmployeeRecordService::getEmployeeRecord($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
