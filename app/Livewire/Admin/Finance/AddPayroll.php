<?php

namespace App\Livewire\Admin\Finance;

use LivewireUI\Modal\ModalComponent;
use Modules\Finance\App\Services\PayrollService;
use App\Models\User;
use Session;

class AddPayroll extends ModalComponent
{
    public $created_by;
    public $employee_id;
    public $month;
    public $amount;
    public $payroll_status;
     // Validate
     protected $rules = [
        'employee_id' => 'required',
        'amount' => 'required',
        'month' => 'required',
        'payroll_status' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'employee_id.required' => 'Name of Employee is required',
        'amount.required' => 'Amount is required',
        'month.required' => 'Month is required',
        'payroll_status.required' => 'Status is required',
    ];
    public function addPayroll(){
        $this->validate();
        $fields = [
            'employee_id' => $this->employee_id,
            'amount' => $this->amount,
            'month' => $this->month,
            'payroll_status' => $this->payroll_status,
            'created_by' => auth()->user()->id,
        ];
        PayrollService::createPayroll($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Payroll', 'refreshComponent');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.finance.add-payroll',[
            'employees'=>$this->getEmployee()
        ]);
    }

    private function getEmployee(){
        return User::whereStatus('employee')->get();
    }
}
