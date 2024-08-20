<?php

namespace App\Livewire\Admin\Finance;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;
use Modules\Department\App\Models\Department;
use Modules\Finance\App\Services\RequisitionService;
use Modules\Item\App\Models\Item;

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
     // Validate
     protected $rules = [
        'requested_by' => 'required',
        'department_id' => 'required',
        'amount' => 'required',
        'item_id' => 'required',
        'description' => 'required',
        'unit_cost' => 'required',
        'work_order' => 'required',
        'date' => 'required',
        'unit_cost' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'requested_by.required' => 'Category is required',
        'department_id.required' => 'Type is required',
        'amount.required' => 'Name of Item is required',
        'item_id.required' => 'Quantity is required',
        'description.required' => 'Description is required',
    ];
    public function addRequisition(){
        $this->validate();
        $fields = [
            'requested_by' => auth()->user()->id,
            'department_id' => $this->department_id,
            'item_id' => $this->item_id,
            'date' => $this->date,
            'work_order' => $this->work_order,
            'item_id' => $this->item_id,
            'description' => $this->description,
            'unit_cost' => $this->unit_cost,
            'amount' => $this->amount,
        ];
        RequisitionService::createRequisition($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Package', 'refreshComponent');
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
