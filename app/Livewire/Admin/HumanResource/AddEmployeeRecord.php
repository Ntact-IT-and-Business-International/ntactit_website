<?php

namespace App\Livewire\Admin\HumanResource;

use LivewireUI\Modal\ModalComponent;
use Modules\Department\App\Models\Department;
use Modules\HumanResource\App\Services\EmployeeRecordService;

class AddEmployeeRecord extends ModalComponent
{
    public $created_by;
    public $employee_id;
    public $department_id;
    public $position;
    public $curriculum_vitae;
    public $appointment_letter;
    public $contract;
    public $job_description;
    public $salary;
    public $account_number;
    public $tin_number;
    public $nssf; 
    public $employee_status;
    public $phone_number;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $photo;
     // Validate
     protected $rules = [
        'employee_id' => 'required',
        'department_id' => 'required',
        'position' => 'required',
        'curriculum_vitae' => 'required',
        'appointment_letter' => 'required',
        'contract' => 'required',
        'job_description' => 'required',
        'salary' => 'required',
        'account_number' => 'required',
        'tin_number' => '',
        'nssf' => '',
        'employee_status' => 'required',
        'created_by' => '',
        'phone_number' => 'required|unique:employee_records',
        'email' => 'required',
        'password' => 'required',
        'password_confirmation' => 'required:same|password',
        'photo' => 'required',
        'name' => 'required',
    ];

    // Customize validation error messages
    protected $messages = [
        'employee_id.required' => 'Name of Employee is required',
        'department_id.required' => 'Department is required',
        'position.required' => 'Position is required',
        'appointment_date.required' => 'Appointment Letter is required',
        'curriculum_vitae.required' => 'Curiculum Vitae is required',
        'appointment_letter.required' => 'Appointment Letter is required',
        'contract.required' => 'Contract is required',
        'job_description.required' => 'Job Description is required',
        'salary.required' => 'Salary is required',
        'account_number.required' => 'Account Number is required',
        'employee_status.required' => 'Status is required',
        'phone_number.required' => 'Phone Number is required',
        'email.required' => 'Email is required',
        'password.required' => 'Password is required',
        'password_confirmation.required' => 'Please confirm password',
        'photo.required' => 'Photo is required',
        'name.required' => 'Full Names is required',
    ];
    public function addEmployee(){
        $this->validate();
        $fields = [
            'employee_id' => $this->employee_id,
            'department_id' => $this->department_id,
            'position' => $this->position,
            'appointment_date' => $this->appointment_date,
            'curriculum_vitae' => $this->curriculum_vitae,
            'appointment_letter' => $this->appointment_letter,
            'contract' => $this->contract,
            'job_description' => $this->job_description,
            'salary' => $this->salary,
            'account_number' => $this->account_number,
            'tin_number' => $this->tin_number,
            'nssf' => $this->nssf,
            'employee_status' => $this->employee_status,
            'created_by' => auth()->user()->id,
        ];
        EmployeeRecordService::createEmployeeRecord($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('EmployeeRecord', 'refreshComponent');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.human-resource.add-employee-record',[
            'departments'=>$this->getDepartment()
        ]);
    }
    private function getDepartment(){
        return Department::get();
    }
}
