<?php

namespace App\Livewire\Admin\HumanResource;

use Livewire\Component;
use Modules\HumanResource\App\Services\EmployeeRecordService;

class ViewMorOnEmployee extends Component
{
    public $EmployeeId;
    public $employee_record_id;

    public function mount($employee_record_id){
        $this->EmployeeId =$employee_record_id;
    }

    public function render()
    {
        return view('livewire.admin.human-resource.view-mor-on-employee',[
            'employee_records'=>EmployeeRecordService::getOneEmployeeRecord($this->employee_record_id)
        ]);
    }
}
