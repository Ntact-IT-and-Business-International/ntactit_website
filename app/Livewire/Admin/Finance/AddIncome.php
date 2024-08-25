<?php

namespace App\Livewire\Admin\Finance;

use LivewireUI\Modal\ModalComponent;
use Modules\BusinessDevelopment\App\Models\BusinessDevelopmentDocument;
use Modules\BusinessDevelopment\App\Models\Client;
use Modules\Finance\App\Services\IncomeService;
use Session;

class AddIncome extends ModalComponent
{
    public $entered_by;
    public $invoice_number;
    public $received_from;
    public $reason;
    public $initial_deposit;
    public $actual_amount;
    public $income_status;
     // Validate
     protected $rules = [
        'invoice_number' => '',
        'received_from' => 'required',
        'initial_deposit' => '',
        'reason' => 'required',
        'actual_amount' => 'required',
        'income_status' => '',
        'entered_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'received_from.required' => 'Client Name is required',
        'reason.required' => 'Reason is required',
        'actual_amount.required' => 'Actual Amount is required',
    ];
    public function addIncome(){
        $this->validate();
        $invoice_number =BusinessDevelopmentDocument::where('client_id',$this->received_from)->value('invoice_number');
        $fields = [
            'received_from' => $this->received_from,
            'invoice_number' => $invoice_number,
            'reason' => $this->reason,
            'initial_deposit' => $this->initial_deposit,
            'actual_amount' => $this->actual_amount,
            'income_status' => $this->income_status,
            'entered_by' => auth()->user()->id,
        ];
        IncomeService::createIncome($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Income', 'refreshComponent');
        $this->closeModal();
    }
    
    public function render()
    {
        return view('livewire.admin.finance.add-income',[
            'clients'=>$this->getClient()
        ]);
    }
    private function getClient(){
        return BusinessDevelopmentDocument::with('client')->distinct()->select('client_id')->whereNotNull('invoice_number')->get();
    }
}
