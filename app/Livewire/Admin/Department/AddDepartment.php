<?php

namespace App\Livewire\Admin\Department;

use LivewireUI\Modal\ModalComponent;
use Modules\Department\App\Services\DepartmentService;
use Session;

class AddDepartment extends ModalComponent
{
    public $created_by;
    public $department;
     // Validate
     protected $rules = [
        'department' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'department.required' => 'Department is required',
    ];
    public function addDepartment(){
        $this->validate();
        $fields = [
            'department' => $this->department,
            'created_by' => auth()->user()->id,
        ];
        DepartmentService::createDepartment($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Department', 'refreshComponent');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.department.add-department');
    }
}
