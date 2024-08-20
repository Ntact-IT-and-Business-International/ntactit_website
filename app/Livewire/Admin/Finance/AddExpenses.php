<?php

namespace App\Livewire\Admin\Finance;

use LivewireUI\Modal\ModalComponent;
use Modules\Department\App\Models\Department;
use Modules\Finance\App\Services\ExpenseService;
use Modules\Item\App\Models\Item;
use App\Models\User;
use Session;

class AddExpenses extends ModalComponent
{
    public $created_by;
    public $item_id;
    public $department_id;
    public $quantity;
    public $amount;
    public $description;
    public $date_of_expense;
    public $unit_cost;
    public $expense_status;
     // Validate
     protected $rules = [
        'item_id' => 'required',
        'department_id' => 'required',
        'amount' => 'required',
        'quantity' => 'required',
        'description' => 'required',
        'date_of_expense' => 'required',
        'unit_cost' => 'required',
        'received_by'=>'required',
        'expense_status' => '',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'item_id.required' => 'Item is required',
        'department_id.required' => 'Department is required',
        'amount.required' => 'Amount is required',
        'quantity.required' => 'Quantity is required',
        'description.required' => 'Description is required',
        'date_of_expense.required' => 'Date is required',
        'unit_cost.required' => 'Unit Cost is required',
        'received_by.required' => 'Name of Person is required',
    ];
    public function addExpenditure(){
        $this->validate();
        $fields = [
            'received_by' => $this->received_by,
            'item_id' => $this->item_id,
            'department_id' => $this->department_id,
            'date_of_expense' => $this->date_of_expense,
            'quantity' => $this->quantity,
            'description' => $this->description,
            'unit_cost' => $this->unit_cost,
            'amount' => $this->amount,
            'expense_status' => 'pending',
            'created_by' => auth()->user()->id,
        ];
        ExpenseService::createExpense($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Expenses', 'refreshComponent');
        $this->closeModal();
    }
    
    public function render()
    {
        return view('livewire.admin.finance.add-expenses',[
            'employees'=>$this->getEmployee(),
            'items'=>$this->getItem(),
            'departments'=>$this->getDepartment()
        ]);
    }
    private function getItem(){
        return Item::get();
    }
    private function getDepartment(){
        return Department::get();
    }
    private function getEmployee(){
        return User::whereStatus('employee')->get();
    }
}
