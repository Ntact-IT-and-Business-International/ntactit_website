<?php

namespace App\Livewire\Admin\HumanResource;

use LivewireUI\Modal\ModalComponent;
use Modules\HumanResource\App\Services\AttendanceService;
use Session;

class AddAttendance extends ModalComponent
{
    public $time_in;
    public $employee_id;
     // Validate
     protected $rules = [
        'employee_id' => '',
        'time_in' => 'required',
    ];

    // Customize validation error messages
    protected $messages = [
        'time_in.required' => 'Time in is required',
    ];
    public function addAttendance(){
        $this->validate();
        $fields = [
            'employee_id' => auth()->user()->id,
            'time_in' => $this->time_in,
        ];
        AttendanceService::createAttendance($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Attendance', 'refreshComponent');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.admin.human-resource.add-attendance');
    }
}
