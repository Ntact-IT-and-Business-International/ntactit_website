<?php

namespace App\Livewire\Admin\HumanResource;

use Livewire\Component;
use Modules\HumanResource\App\Services\LeaveService;
use Session;

class AddLeave extends Component
{
    public $created_by;
    public $employee_id;
    public $date_in;
    public $date_out;
    public $reason;
    public $leave_status;
     // Validate
     protected $rules = [
        'employee_id' => 'required',
        'date_in' => 'required',
        'date_out' => 'required',
        'reason' => 'required',
        'leave_status' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'employee_id.required' => 'Department is required',
    ];
    public function addLeave(){
        $this->validate();
        $fields = [
            'employee_id' => $this->employee_id,
            'date_in' => $this->date_in,
            'date_out' => $this->date_out,
            'reason' => $this->reason,
            'created_by' => auth()->user()->id,
        ];
        LeaveService::createLeave($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Leave', 'refreshComponent');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.human-resource.add-leave');
    }
}
