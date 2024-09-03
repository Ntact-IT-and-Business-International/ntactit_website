<?php

namespace App\Livewire\Admin\Finance;

use LivewireUI\Modal\ModalComponent;
use Modules\Department\App\Models\Department;
use Modules\Finance\App\Services\RequisitionService;
use Modules\Item\App\Models\Item;
use Illuminate\Support\Facades\Session;

class AddRequisition extends ModalComponent
{
    public $requested_by;
    public $department_id;
    public $item_id;
    public $amount;
    public $description;
    public $unit_cost;
    public $work_order;
    public $date;
    public $quantity;
     // Validate
     protected $rules = [
        'requested_by' => '',
        'department_id' => 'required',
        'amount' => '',
        'item_id' => 'required',
        'description' => 'required',
        'unit_cost' => 'required',
        'work_order' => 'required',
        'date' => 'required',
        'unit_cost' => 'required',
        'quantity' =>'required',
    ];

    // Customize validation error messages
    protected $messages = [
        'department_id.required' => 'Department is required',
        'work_order.required' => 'Work order is required',
        'item_id.required' => 'Quantity is required',
        'description.required' => 'Description is required',
        'quantity.required' => 'Quantity is required',
        'date.required' => 'Description is required',
        'unit_cost.required' => 'Unit Cost is required',
    ];
    public function addRequisition(){
        $this->validate();
        $amount = $this->quantity *  $this->unit_cost;
        $fields = [
            'requested_by' => auth()->user()->id,
            'department_id' => $this->department_id,
            'item_id' => $this->item_id,
            'date' => $this->date,
            'work_order' => $this->work_order,
            'item_id' => $this->item_id,
            'description' => $this->description,
            'request_status'=>'pending',
            'quantity' => $this->quantity,
            'unit_cost' => $this->unit_cost,
            'amount' => $amount,
        ];
        RequisitionService::createRequisition($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Requisition', 'refreshComponent');
        $this->closeModal();
    }
    
    public function render()
    {
        return view('livewire.admin.finance.add-requisition',[
            'departments'=>$this->getDepartment(),
            'items' =>$this->getItem()
        ]);
    }
    private function getDepartment(){
        return Department::get();
    }
    private function getItem(){
        return Item::get();
    }
}
