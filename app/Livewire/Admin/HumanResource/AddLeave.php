<?php

namespace App\Livewire\Admin\HumanResource;

use LivewireUI\Modal\ModalComponent;
use Modules\HumanResource\App\Services\LeaveService;
use Session;

class AddLeave extends ModalComponent
{
    public $employee_id;
    public $date_in;
    public $date_out;
    public $reason;
     // Validate
     protected $rules = [
        'employee_id' => '',
        'date_in' => 'required',
        'date_out' => 'required',
        'reason' => 'required',
    ];

    // Customize validation error messages
    protected $messages = [
        'date_in.required' => 'Date in is required',
        'date_out.required' => 'Date Out is required',
        'reason.required' => 'Reason is required',
    ];
    public function addLeave(){
        $this->validate();
        $fields = [
            'employee_id' =>auth()->user()->id,
            'date_in' => $this->date_in,
            'date_out' => $this->date_out,
            'reason' => $this->reason,
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
