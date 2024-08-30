<?php

namespace App\Livewire\Admin\AccountSetting;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use Modules\HumanResource\App\Models\EmployeeRecord;
use Modules\HumanResource\App\Services\EmployeeRecordService;

class StaffPermissions extends Component
{
    use WithPagination, WithSorting;
    public $employee_id;

    protected $listeners = ['StaffForPermissions' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';
    
    public function mount($employee_id){
        $this->employee_id =$employee_id;
    }

    public function render()
    {
        return view('livewire.admin.account-setting.staff-permissions',[
            'users' =>EmployeeRecordService::getEmployeeRecord($this->search, $this->sortBy, $this->sortDirection, $this->perPage),
            'employees'=>$this->getEmployee()
        ]);
    }
    private function getEmployee(){
        return EmployeeRecord::with('department','employee')->whereEmployeeId($this->employee_id)->get();
    }
}
