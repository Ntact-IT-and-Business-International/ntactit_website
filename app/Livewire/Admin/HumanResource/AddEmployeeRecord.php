<?php

namespace App\Livewire\Admin\HumanResource;

use LivewireUI\Modal\ModalComponent;
use Modules\Department\App\Models\Department;
use Modules\HumanResource\App\Services\EmployeeRecordService;
use App\Traits\saveToPhotoFolder;
use App\Traits\saveToContractFolder;
use App\Traits\saveToCvFolder;
use App\Traits\saveToAppointmentFolder;
use Livewire\WithFileUploads;
use App\Models\User;
use Session;

class AddEmployeeRecord extends ModalComponent
{
    use saveToPhotoFolder,saveToContractFolder,saveToCvFolder,saveToAppointmentFolder,WithFileUploads;
    public $created_by;
    public $employee_id;
    public $department_id;
    public $position;
    public $curriculum_vitae;
    public $appointment_letter;
    public $appointment_date;
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
        'employee_id' => '',
        'department_id' => 'required',
        'position' => 'required',
        'curriculum_vitae' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:1024',
        'appointment_letter' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:1024',
        'contract' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:1024',
        'job_description' => 'required',
        'salary' => 'required',
        'account_number' => 'required',
        'tin_number' => '',
        'nssf' => '',
        'employee_status' => 'required',
        'appointment_date' => 'required',
        'created_by' => '',
        'phone_number' => 'required|unique:employee_records',
        'email' => 'required',
        'password' => 'required',
        'password_confirmation' => 'required|same:password',
        'photo' => 'required|mimes:jpeg,png,webp|max:1024',
        'name' => 'required',
    ];

    // Customize validation error messages
    protected $messages = [
        'department_id.required' => 'Department is required',
        'position.required' => 'Position is required',
        'appointment_date.required' => 'Appointment Date is required',
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
        // try {
        //     $this->validate();
        // } catch (\Illuminate\Validation\ValidationException $e) {
        //     dd($e->errors()); // This will show you the validation errors.
        // }
        $user = User::createUserAccount($this->name, $this->email, 'employee', $this->password);

        // Retrieve the ID of the newly created user
        $employeeId = $user->id;

        $photo = $this->saveToPhotos('photo', $this->photo);
        $cv = $this->saveToCvs('cv', $this->curriculum_vitae);
        $appointment = $this->saveToAppointments('appointment', $this->appointment_letter);
        $contract = $this->saveToContracts('contract', $this->contract);
        $fields = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'employee_id' => $employeeId,
            'department_id' => $this->department_id,
            'position' => $this->position,
            'appointment_date' => $this->appointment_date,
            'curriculum_vitae' => $cv,
            'appointment_letter' => $appointment,
            'contract' => $contract,
            'job_description' => $this->job_description,
            'salary' => $this->salary,
            'account_number' => $this->account_number,
            'tin_number' => $this->tin_number,
            'nssf' => $this->nssf,
            'phone_number' =>$this->phone_number,
            'employee_status' => $this->employee_status,
            'photo'=>$photo,
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
