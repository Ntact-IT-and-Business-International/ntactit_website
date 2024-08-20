<?php

namespace App\Livewire\Admin\Finance;

use LivewireUI\Modal\ModalComponent;
use Modules\BusinessDevelopment\App\Models\Client;
use Modules\Finance\App\Services\IncomeService;
use Session;

class AddIncome extends ModalComponent
{
    public $created_by;
    public $invoice_id;
    public $received_from;
    public $reason;
    public $initial_deposit;
    public $actual_amount;
    public $income_status;
     // Validate
     protected $rules = [
        'invoice_id' => 'required',
        'received_from' => 'required',
        'initial_deposit' => '',
        'reason' => 'required',
        'actual_amount' => 'required',
        'income_status' => '',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'invoice_id.required' => 'Category is required',
        'received_from.required' => 'Type is required',
        'reason.required' => 'Quantity is required',
        'actual_amount.required' => 'Description is required',
    ];
    public function addIncome(){
        $this->validate();
        $fields = [
            'invoice_id' => $this->invoice_id,
            'received_from' => $this->received_from,
            'reason' => $this->reason,
            'initial_deposit' => $this->initial_deposit,
            'actual_amount' => $this->actual_amount,
            'income_status' => $this->income_status,
            'created_by' => auth()->user()->id,
        ];
        IncomeService::createIncome($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Income', 'refreshComponent');
        $this->closeModal();
    }
    
    public function render()
    {
        return view('livewire.admin.finance.add-income',[
            'invoices'=>$this->getInvoiceNumber()
        ]);
    }
    private function getInvoiceNumber(){
        return Client::get();
    }
}
